<?php $id = 1; ?>
<FORM METHOD="POST" ACTION="registration.php">
<P>First name:
<INPUT TYPE="TEXT" NAME="firstname" SIZE="20"> 
<P>Last name:
<INPUT TYPE="TEXT" NAME="lastname" SIZE="20">
<P>Rank:
<INPUT TYPE="TEXT" NAME="rank" SIZE="10">
<INPUT TYPE="HIDDEN" NAME="serial number" VALUE="<?php echo $id; ?>">
<INPUT TYPE="submit" SUBMIT" VALUE="INPUT">
</FORM>