"use strict";
new Vue({
	el: "#app",
	data:{
		link:'',
		password:'',
	},
	created(){
		this.getRating();
	},
	watch: {
	},
	methods:{
		convertPDFToWord: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/pdf_to_word',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		convertWordToPDF: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/word_to_pdf',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		convertImageToPDF: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/image_to_pdf',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		convertPDFToImage: function(type){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
				'type':type,
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/pdf_to_image',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		mergePDF: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/merge_pdf',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		convertPNGtoJPG: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/png_to_jpg',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		convertJPGtoPNG: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'file':$("#file_link").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/jpg_to_png',
				method: 'POST',
				data: data,
				success: function(response){
					vue_this.noty(response.status,response.message,'');
					if (response.status == 'success') {
						vue_this.showDownloadSection(response['url'])
						// setTimeout(function(){
						// setTimeout(function(){
						// 	vue_win.open(response['url'], '_blank');
						// },200)
					}
					vue_this.preloader('hide');
				},
				error: function(response){
					toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		getRating: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/get_star_rating',
				method: 'POST',
				data: data,
				success: function(response){
					console.log(response,'Response')
					let r = response.rate
					vue_this.setStars(r)
				},
				error: function(response){
					console.log('ERROR RESPONSE',response)
					// toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		sendMySignature: function(){
			this.preloader('show');
			let data = {
				'_token':$("#csrf_token").text(),
				'full_name': this.fullName,
				'email': this.email,
				'file': $("#signature_image").text(),
			};
			let vue_this = this;
			let vue_win = window;
			$.ajax({
				url: '/web_api/get_star_rating',
				method: 'POST',
				data: data,
				success: function(response){
					console.log(response,'Response')
					if(response.status == 'success'){
						vue_this.closeOtherModals('sigRegisterSuccessModal')
					}
				},
				error: function(response){
					console.log('ERROR RESPONSE',response)
					// toastr.error('Error',response.message);
					vue_this.preloader('hide');
				}
			})
		},
		setStars: function(r){
			let goldStar = "useful_asset/svg/star_gold.svg"
			let whiteStar = "useful_asset/svg/star.svg"
			if(r > 4 ){
				$(".starFive > img").attr("src",goldStar)
			}else{
				$(".starFive > img").attr("src",whiteStar)
			}
			if(r > 3 ){
				$(".starFour > img").attr("src",goldStar)
			}else{
				$(".starFour > img").attr("src",whiteStar)
			}
			if(r > 2 ){
				$(".starThree > img").attr("src",goldStar)
			}else{
				$(".starThree > img").attr("src",whiteStar)
			}
			if(r > 1 ){
				$(".starTwo > img").attr("src",goldStar)
			}else{
				$(".starTwo > img").attr("src",whiteStar)
			}
			if(r > 0 ){
				$(".starOne > img").attr("src",goldStar)
			}else{
				$(".starOne > img").attr("src",whiteStar)
			}
		},
		showDownloadSection: function(link){
			$(".downloadButton").attr("href",link)
			$("#convert").hide()
			// $(".uploaderMain").hide()
			$("#downloadSection").show()
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