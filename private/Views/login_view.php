<?php

// if (isset($_POST['login']) and isset($_POST['name']) and isset($_POST['pwd']) and isset($_POST['pwd_confirm'])
// and isset($_POST['birthdate']) and isset($_POST['sex']) and $_POST['pwd'] === $_POST['pwd_confirm']) {
//     check_users();
// }

// function check_users() {
// 	trim($_POST['login']);
// 	trim($_POST['name']);
// 	trim($_POST['pwd']);
// 	trim($_POST['pwd_confirm']);
// 	strip_tags($_POST['login']);
// 	strip_tags($_POST['name']);
// 	strip_tags($_POST['pwd']);
// 	strip_tags($_POST['pwd_confirm']);
// 	echo $_POST;
// 	return true;
// }

?>
    <!-- Контент сайта -->
		<div class="reg">
			<p>Войти на сайт:</p>
	        <form id="login" action="#" method="post">
	            <fieldset>
	                <table class="register">
	                    <tr>
	                        <td>
	           	                <label for="login_auth">Логин: </label>
	                        </td>
	                        <td>
	                            <input id="login_auth" type="text" placeholder="логин" required>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<label for="pwd_auth">Пароль: </label>
	                    	</td>
							<td>
								<input id="pwd_auth" type="password" placeholder="пароль" required>
							</td>
	                    </tr>
	                    <tr>
							<td>
								
							</td>
							<td>
								<input type="submit" value="Отправить">
								<input type="reset" value="Сбросить">
							</td>
						</tr>
	                </table>
	                <div id="memo"></div>
	           </fieldset> 
	        </form>
		</div>		
    <!-- Конец контента сайта -->
