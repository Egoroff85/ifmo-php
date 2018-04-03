    <!-- Контент сайта -->
		<div class="bigfont reg">
			<img id="avatarimage" src="static/upload/<?php echo $_SESSION['avatar'];?>" alt=""><br>
			<b>Добро пожаловать, <?php echo $_SESSION['login']; ?></b>
		</div>

		<div class="userinfo">
		<form id="user_info" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Информация о пользователе:</legend>
                    <table class=register>
                        <tr>
                            <td>
                                Ваше имя:
                            </td>
                            <td>
                                <? echo $_SESSION['name'] ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Дата рождения:
                            </td>
                            <td>
                                <? echo $_SESSION['birthdate']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Ваш пол:</label>
                            </td>
                            <td>
								<? echo $_SESSION['sex']; ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label>Загрузите аватар:</label>                                    
                            </td>
                            <td>
                            	<input id="avatar" type="file" name="avatar" accept="image/*">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            	<input form="user_info" type="submit" value="Загрузить аватар">                                
                            </td>
                            <td>
                            	<input type="button" value="Выйти из аккаунта" onclick="window.location='/account/logout'">
                            </td>                            
                        </tr>
                    </table>
                    <div id="response"></div>
                    </fieldset>
                </form>
                </div>		
    <!-- Конец контента сайта -->
