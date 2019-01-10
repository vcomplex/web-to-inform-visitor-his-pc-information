<!-- portscanner -->

<table border=1>
    <tr>
        <td>Service</td>
        <td>Status</td>
    </tr>
    <tr>
        <td>FTP</td>
        <td><?php echo $report['FTP'] ? "Online" : "Offline"; ?></td>
    </tr>
    <tr>
        <td>SSH</td>
        <td><?php echo $report['SSH'] ? "Online" : "Offline"; ?></td>
    </tr>
    <tr>
        <td>SMTP</td>
        <td><?php echo $report['SMTP'] ? "Online" : "Offline"; ?></td>
    </tr>
    <tr>
        <td>HTTP</td>
        <td><?php echo $report['HTTP'] ? "Online" : "Offline"; ?></td>
    </tr>
    <tr>
        <td>POP3</td>
        <td><?php echo $report['POP3'] ? "Online" : "Offline"; ?></td>
    </tr>
    <tr>
        <td>IMAP</td>
        <td><?php echo $report['IMAP'] ? "Online" : "Offline"; ?></td>
    </tr>
    <tr>
        <td>MySQL</td>
        <td><?php echo $report['MySQL'] ? "Online" : "Offline"; ?></td>
    </tr>


    <tr>
        <td>RDP</td>
        <td><?php echo $report['RDP'] ? "Online" : "Offline"; ?></td>
    </tr>

</table>