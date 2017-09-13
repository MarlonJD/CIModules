<?php
echo $this->lang->line("hello_message"); ?> </br> 
<?php $degisken = "5";
echo sprintf($this->lang->line("hello_example"), $degisken);
?>
<a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/english'>English</a>
<a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/german'>German</a>
<a href='<?php echo base_url(); ?>LangSwitch/switchLanguage/turkish'>Turkish</a>
