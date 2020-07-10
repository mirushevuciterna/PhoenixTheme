
jQuery(document).ready(function($) {


jQuery('.pp_like').click(function(e){
e.preventDefault();
jQuery('.pp_like').hide();
jQuery('.lds-facebook').show();
var postid=jQuery(this).data('id');
//alert(postid);
var data = {
action: 'my_action',
security : MyAjax.security,
postid: postid
};
jQuery.post(MyAjax.ajaxurl, data, function(res) {
var result=jQuery.parseJSON( res );
console.log(result);
//alert(res);
var likes="";
likes=result.likecount;

if(likes === 1){
jQuery('.post_like span').text(likes + ' like');
}
else{
jQuery('.post_like span').text(likes + ' likes');    
}




if(result.like ==1){
jQuery('.pp_like').addClass('liked');
jQuery('#thumb').removeClass('fa fa-thumbs-up');
jQuery('#thumb').addClass('fa fa-thumbs-down');

}
if(result.dislike ==1){
jQuery('.pp_like').removeClass('liked');
jQuery('#thumb').removeClass('fa fa-thumbs-down');
jQuery('#thumb').addClass('fa fa-thumbs-up');
} 
jQuery('.pp_like').show();
jQuery('.lds-facebook').hide();
});
});


});