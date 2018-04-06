
<!--
// Form validation code will come here.
function validate()
{
 
   if( document.myForm.p_id.value == "" )
   {
     alert( "Please provide your Patient id!" );
     document.myForm.p_id.focus() ;
     return false;
   }
   
   if( document.myForm.p_doc.value == "" )
   {
     alert( "Please provide your Doctor name!" );
     document.myForm.p_doc.focus() ;
     return false;
   }
   
   if( document.myForm.p_ward.value == "" )
   {
     alert( "Please provide your Ward number!" );
     document.myForm.p_ward.focus() ;
     return false;
   }
   
   
   alert( "Values entered successfully" );
}
//-->
