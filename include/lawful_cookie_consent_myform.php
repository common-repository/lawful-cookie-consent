<?php
global $wpdb;
 $result = $wpdb->get_results("SELECT * FROM wc_lawful_cookie_consent");			
 foreach ( $result as $row ) {
 $popbg = $row->popbg;	
 $btnbg = $row->btnbg;
 $btntxt = $row->btntxt;
 $position = $row->position;
 $linkpage = $row->linkpage;
 $eumessage = $row->eumessage; 
 }
 //if ( is_front_page() ) { 
?>				
<script type="text/javascript">
var popbg = "<?php echo esc_html($popbg); ?>";
var btnbg = "<?php echo esc_html($btnbg); ?>";
var btntxt = "<?php echo esc_html($btntxt); ?>";
var position = "<?php echo esc_html($position); ?>";
var linkpage = "<?php echo esc_html($linkpage); ?>";
var eumessage = "<?php echo esc_html($eumessage); ?>";
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
	   "background": popbg,
    },
    "button": {
	   "background": btnbg,
	    "text": btntxt
    }
  },
  content: {
	   message: eumessage,
	   link: "Cookie notice",
       href: linkpage
    },
  "position": position
})});
        </script>
<?php		
 //}