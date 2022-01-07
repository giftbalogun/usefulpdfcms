"use strict";
new Vue({
	el: "#app",
	data:{
		email:'',
		fullName:'',
		typedSignature:'',
		showTypedSignature:'false',
		signatureType:'',
		signatures: [
			'homemadeApple',
			'indieFlower',
			'pacifico',
			'shadowsIntoLight',
			'caveat',
			'satisfy',
			'greatVibes',
			'kaushanScript',
			'sacramento',
			'parisienne',
			'yellowtail',
			'cookie',
			'dancingScript',
			'handlee',
			'tangerine',
			'badScript',
			'marckScript',
			'allura',
			'damion',
			'alexBrush',
			'mrDafoe',
			'pinyonScript',
			'italianno',
			'norican',
			'yesteryear',
			'arizonia',
			'herrVonMuellerhoff',
			'mrsSaintDelafield',
			'kristi',
			'ballet',
		],
		typedSignatureFontSize:62,
		modalFontFamily:'',
		signImage:'',
		signPerPage:12,
		signPage:1,
	},
	created(){
		$(document).ready(function(){
			$("#preloader").hide()
		})
	},
	mounted(){
	},
	watch: {
	},
	methods:{
		generateTypedSignature: function(){
			if(!this.typedSignature){
				this.showTypedSignature = 'false'
				$("#generateButton").text('Generate')
			}else{
				this.showTypedSignature = 'true'
				$("#generateButton").text('Generate New')
			}
		},
		rangeSlide: function(){
			let val = $("#myRange").val()
			console.log(val)
			if(val){
				// $("#myRange").css('font-size',val+'px')
				this.typedSignatureFontSize = val
			}
		},
		openBeepPage: function(){
			location.href = '/signature-creator'
		},
		setModalFontFamily: function(a){
			this.modalFontFamily = a
			this.saveSignature()
		},
		loadMoreSignatures: function(){
			let maxPage = this.signatures.length/this.signPerPage
			if(this.signPage >= maxPage){
				// max no reached
			}else{
				this.signPage++
			}
		},
		saveSignature: function(){
			setTimeout(() => {
				let imageName = Math.floor(Date.now() / 1000);
				var element = $("#finalSignature")[0];
				console.log("saveSignature",element)
				let vueThis = this
				html2canvas(element).then(function (canvas) {
					var myImage = canvas.toDataURL('image/jpg');
					// console.log('::::',canvas)
					// console.log('::::',myImage)
					vueThis.signImage = myImage
					// save the content in the p tag
					$("#signature_image").text(myImage)
					// downloadURI(myImage, imageName+".png");
				});
			}, 1500);
		},
		sendSignatureToEmail: function(){
			this.saveSignature()
			this.preloader('show');
			let data = {
				'_token':$('meta[name="csrf-token"]').attr('content'),
				'full_name': this.fullName,
				'email': this.email,
				'file': this.signImage,
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/send_signature_to_email',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						// vue_this.closeOtherModals('sigRegisterSuccessModal')
						// vue_this.openModal('sigRegisterSuccessModal');
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		sendDrawnSignatureToEmail: function(){
			this.preloader('show');
			let data = {
				'_token':$('meta[name="csrf-token"]').attr('content'),
				'full_name': this.fullName,
				'email': this.email,
				'file': $("#signature_image").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/send_signature_to_email',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.closeOtherModals('sigRegisterSuccessModal')
						vue_this.openModal('sigRegisterSuccessModal');
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		registerAndJoinWaitingList: function(){
			let a = localStorage.getItem("signature")
			this.preloader('show');
			let data = {
				'_token':$('meta[name="csrf-token"]').attr('content'),
				'full_name': this.fullName,
				'email': this.email,
				'file': a,
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/register_and_join_waiting_list',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.closeOtherModals('sigRegisterSuccessModal')
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			});
		},
		openModal: function(key){
			$("#"+key).modal()
		},
		closeOtherModals: function(a){ 
			let modalsOpen = $(".modal.show").modal('toggle')
			for (let index = 0; index < modalsOpen.length; index++) {
				const element = modalsOpen[index];
				
				console.log(element,'ELEMENT')
			}
		},
		resetTypedSignature: function(){
			this.showTypedSignature = 'false'
			this.typedSignature = ''
		},
		uploadSignatureFontFamily: function(){
			let a = $("#upFontFamily").val()
			console.log(":::::",a)
			if(a){
				$("#editSignature").css("font-family",a)
			}
		},
		startSigningDocs: function(){
			let userSignature = $("#signature_image").text()
			localStorage.setItem("signature",userSignature)
			console.log(userSignature)
			location.href = "/signature-creator/coming_soon"
		},
		uploadSigCloseOtherModals: function(modal){
			// send the signature to the text flow 
			let color = $("#editSignature").css('color')
			let font = $("#editSignature").css('font-family')
			let text = $("#editSignature").text()

			console.log("uploadSigCloseOtherModals",color,font,text)

			this.modalFontFamily = font 
			this.typedSignature = text
			$("#typedSigModal").css("color",color)
			$("#finalSignature > div").css("color",color)

			this.saveSignature()

			this.closeOtherModals()
			this.openModal(modal)
		},
		noty: function(status,message,url){
			if (status == 'success') {
				toastr.success('Success',message);
			}
			if (status == 'warning') {
				toastr.warning('Warning',message);
			}
			if (status == 'failure' || status == 'error') {
				toastr.error('Error',message);
			}
			if (status == 'redirect') {
				setTimeout(function(){
					window.location.href = url;
				},2000);
			}
		},
		preloader: function(action){
			if (action == 'show') {
				$("#preloader").show('slow');
			};
			if (action == 'hide') {
				$("#preloader").hide('slow');
			};
		},
	},
})