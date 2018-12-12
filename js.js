

function CopyToClipboard(containerid) {
if (document.selection) { 
    var range = document.body.createTextRange();
    range.moveToElementText(document.getElementById(containerid));
    range.select().createTextRange();
    document.execCommand("Copy"); 

} else if (window.getSelection) {
    var range = document.createRange();
     range.selectNode(document.getElementById(containerid));
     window.getSelection().addRange(range);
     document.execCommand("Copy");
     alert("Text copied") 
}}

$(document).ready(function(){
$('#BaseTree').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub").show();
      }
      else 
      {
        $("#sub").hide();
		$("#sub1").hide();
		$("#sub2").hide();
		$("#sub3").hide();
		$("#sub4").hide();
		$("#sub5").hide();
		$("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
		
      }
    });
});


$(document).ready(function(){
$('#sub').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub1").show();
      }
      else
      {
        $("#sub1").hide();
		$("#sub2").hide();
		$("#sub3").hide();
		$("#sub4").hide();
		$("#sub5").hide();
		$("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub1').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub2").show();
      }
      else
      {
        $("#sub2").hide();
		$("#sub3").hide();
		$("#sub4").hide();
		$("#sub5").hide();
		$("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub2').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub3").show();
      }
      else
      {
        $("#sub3").hide();
		$("#sub4").hide();
		$("#sub5").hide();
		$("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub3').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub4").show();
      }
      else
      {
        $("#sub4").hide();
		$("#sub5").hide();
		$("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub4').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub5").show();
      }
      else
      {
        $("#sub5").hide();
		$("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub5').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub6").show();
      }
      else
      {
        $("#sub6").hide();
		$("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub6').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub7").show();
      }
      else
      {
        $("#sub7").hide();
		$("#sub8").hide();
      }
    });
});

$(document).ready(function(){
$('#sub7').on('change', function() {
      if ( this.value > 0 )
      {
        $("#sub8").show();
      }
      else
      {
        $("#sub8").hide();
      }
    });
});

$('.toggle').click(function(e) {
  	e.preventDefault();
  
    var $this = $(this);
  
    if ($this.next().hasClass('show')) {
        $this.next().removeClass('show');
        $this.next().slideUp(350);
    } else {
        $this.parent().parent().find('li .inner').removeClass('show');
        $this.parent().parent().find('li .inner').slideUp(350);
        $this.next().toggleClass('show');
        $this.next().slideToggle(350);
    }
});


$(document).ready(function(){
    $('#BaseTree').on('change',function(){
        var BaseTreeID = $(this).val();
        if(BaseTreeID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'base_id='+BaseTreeID,
                success:function(html){
                    $('#sub').html(html);
                    $('#sub1').html('<option value="">Select sub first</option>'); 
                }
            }); 
        }else{
            $('#sub').html('<option value="">Select Base Tree first</option>');
            $('#sub1').html('<option value="">Select sub first</option>'); 
			
        }
    });
    
    $('#sub').on('change',function(){
        var subID = $(this).val();
        if(subID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub_id='+subID,
                success:function(html){
                    $('#sub1').html(html);
                }
            }); 
        }else{
            $('#sub1').html('<option value="">Select sub first</option>'); 
        }
    });
	
	    $('#sub1').on('change',function(){
        var sub1ID = $(this).val();
        if(sub1ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub1_id='+sub1ID,
                success:function(html){
                    $('#sub2').html(html);
                }
            }); 
        }else{
            $('#sub2').html('<option value="">Select sub1 first</option>'); 
        }
    });
	
		    $('#sub2').on('change',function(){
        var sub2ID = $(this).val();
        if(sub2ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub2_id='+sub2ID,
                success:function(html){
                    $('#sub3').html(html);
                }
            }); 
        }else{
            $('#sub3').html('<option value="">Select sub2 first</option>'); 
        }
    });
	
		    $('#sub3').on('change',function(){
        var sub3ID = $(this).val();
        if(sub3ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub3_id='+sub3ID,
                success:function(html){
                    $('#sub4').html(html);
                }
            }); 
        }else{
            $('#sub4').html('<option value="">Select sub3 first</option>'); 
        }
    });
	
		    $('#sub4').on('change',function(){
        var sub4ID = $(this).val();
        if(sub4ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub4_id='+sub4ID,
                success:function(html){
                    $('#sub5').html(html);
                }
            }); 
        }else{
            $('#sub5').html('<option value="">Select sub4 first</option>'); 
        }
    });
	
			$('#sub5').on('change',function(){
        var sub5ID = $(this).val();
        if(sub5ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub5_id='+sub5ID,
                success:function(html){
                    $('#sub6').html(html);
                }
            }); 
        }else{
            $('#sub6').html('<option value="">Select sub5 first</option>'); 
        }
    });

	
			$('#sub6').on('change',function(){
        var sub6ID = $(this).val();
        if(sub6ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub6_id='+sub6ID,
                success:function(html){
                    $('#sub7').html(html);
                }
            }); 
        }else{
            $('#sub7').html('<option value="">Select sub6 first</option>'); 
        }
    });
	
			$('#sub7').on('change',function(){
        var sub7ID = $(this).val();
        if(sub7ID){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'sub7_id='+sub6ID,
                success:function(html){
                    $('#sub8').html(html);
                }
            }); 
        }else{
            $('#sub8').html('<option value="">Select sub7 first</option>'); 
        }
    });	
});

var tabDemo = angular.module('tabDemoApp', []);
tabDemo.controller('tabDemoController' , ['$scope', function($scope){
}]);

 tabDemo.directive('tab', function(){
  return{
		restrict: 'ACE',
    link: function(scope, element, attributes){
      var ele = angular.element(element);
      ele.bind('click', function(e){
        angular.element('.dymenu .dytabcont:visible').hide();
        angular.element('.dymenu #dytabs a.current').removeClass();
        angular.element('.dymenu .dytabcont').removeClass('active');
        var tabLink = ele.attr('href');
        angular.element(tabLink).show();
        angular.element(tabLink).addClass('active');
        ele.addClass('current');
        e.preventDefault();
      });
    },
  }
}); 


var iframe = document.getElementsByTagName('iframe')[0];
var url = iframe.src;
var getData = function (data) {
    if (data && data.query && data.query.results && data.query.results.resources && data.query.results.resources.content && data.query.results.resources.status == 200) loadHTML(data.query.results.resources.content);
    else if (data && data.error && data.error.description) loadHTML(data.error.description);
    else loadHTML('Error: Cannot load ' + url);
};

var loadHTML = function (html) {
    iframe.src = 'about:blank';
    iframe.contentWindow.document.open();
    iframe.contentWindow.document.write(html.replace(/<head>/i, '<head><base href="' + url + '"><scr' + 'ipt>document.addEventListener("click", function(e) { if(e.target && e.target.nodeName == "A") { e.preventDefault(); parent.loadURL(e.target.href); } });</scr' + 'ipt>'));
    iframe.contentWindow.document.close();
}

loadURL(iframe.src);

$(".dropdown dt a").on('click', function() {
  $(".dropdown dd ul").slideToggle('fast');
});

$(".dropdown dd ul li a").on('click', function() {
  $(".dropdown dd ul").hide();
});

function getSelectedValue(id) {
  return $("#" + id).find("dt a span.value").html();
}

/*
	Dropdown with Multiple checkbox select with jQuery - May 27, 2013
	(c) 2013 @ElmahdiMahmoud
	license: https://www.opensource.org/licenses/mit-license.php
*/

$(".dropdown dt a").on('click', function() {
  $(".dropdown dd ul").slideToggle('fast');
});

$(".dropdown dd ul li a").on('click', function() {
  $(".dropdown dd ul").hide();
});

function getSelectedValue(id) {
  return $("#" + id).find("dt a span.value").html();
}

$(document).bind('click', function(e) {
  var $clicked = $(e.target);
  if (!$clicked.parents().hasClass("dropdown")) $(".dropdown dd ul").hide();
});

$('.mutliSelect input[type="checkbox"]').on('click', function() {

  var title = $(this).closest('.mutliSelect').find('input[type="checkbox"]').val(),
    title = $(this).val() + ",";

  if ($(this).is(':checked')) {
    var html = '<span title="' + title + '">' + title + '</span>';
    $('.multiSel').append(html);
    $(".hida").hide();
  } else {
    $('span[title="' + title + '"]').remove();
    var ret = $(".hida");
    $('.dropdown dt a').append(ret);

  }
});