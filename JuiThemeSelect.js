$(document).ready(function(){
  if ($.cookie('juiTheme-'+juiThemeSelectId)){
	changeTheme($.cookie('juiTheme-'+juiThemeSelectId));
	$("#"+juiThemeSelectId).val($.cookie('juiTheme-'+juiThemeSelectId));
  }
  $("#"+juiThemeSelectId).change(function(){
	changeTheme($(this).val());
	$.cookie('juiTheme-'+juiThemeSelectId, $(this).val(), { expires: 7 });
  });  
});
function changeTheme(n){  
	  s = document.getElementsByTagName('link');
	  o = '';
	  re = /\/themes\/(.*)\/jquery-ui.css/i;
	  for (i = 0; i < s.length; i++){
		if (s[i].href.match(re)){		  
		  		o = s[i].href.replace(re.exec(s[i].href)[1],n);
				s[i].href=o;
		}		
	  }
	}


