"use strict";
new Vue({
	el: "#app",
	data:{
		email:'',
		fullName:'',
		typedSignature:'',
		showTypedSignature:'false',
		signatures: [
			'sacremento',
			'rhobium',
			'lobster',
			'lobster2',
			'lobster',
			'sacremento',
			'rhobium',
			'lobster2',
			'sacremento',
		],
		typedSignatureFontSize:62,
		modalFontFamily:'',
	},
	created(){
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
			location.href = '/signature/completed'
		},
		setModalFontFamily: function(a){
			this.modalFontFamily = a
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