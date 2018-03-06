<?php
$to      = 'felipe@crowdcapital.com.br';
$subject = 'Nova aplicação pelo formulário';
$q1 = $_POST['checkboxes'];
$q2 = $_POST['feliz'];


$message = '
<table style="border:1px solid black">
<tr>
<td>
<b>Nome:</b>
</td>
<td>
' . $_POST['nome']. '
</td>
</tr>
<tr>
<td>
<b>Data:</b>
</td>
<td>
'. $_POST['data']. '
</td>
</tr>
<tr>
<td>
<b>Telefone: </b>
</td>
<td>
'.$_POST['telefone'].'
</td>
</tr>
<tr>
<td>
<b>Cidade:</b> 
</td>
<td>
'.$_POST['cidade'].'
</td>
</tr>';
$message .= " <tr>
<td>
 <b>Interesses em:</b>  
 </td>
 <td>";
foreach ($q1 as $checkboxes){ 
   $message .= $checkboxes . "<br />" ;
}
$message .= " </td></tr><tr><td><b>O que faz feliz:</b></td><td> ";
foreach ($q2 as $checkboxes2){ 
   $message .= $checkboxes2 ."<br />";
}
$message .= "</td></tr></table>";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <webmaster@crowdcapital.com.br>' . "\r\n";


mail($to, $subject, $message, $headers);
header('Location: http://www.crowdcapital.com.br/index.html?e=1');
?> 