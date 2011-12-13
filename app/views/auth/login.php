<?=form_open()?>

<?=isset($message) ? $message : ''?>

<p>
    Username: <?=form_input('username', set_value('username'))?>
</p>
<p>
    Password: <?=form_password('password')?>
</p>
<?=form_submit('submit', 'Login')?>
<?=form_close()?>