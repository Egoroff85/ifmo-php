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
        <div class="userinfo">
        <form id="catalog" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend>Добавить новый товар в базу:</legend>
                    <table class="register">
                        <tr>
                            <td>
                                <label for="category">Выберите категорию товара: </label>
                            </td>
                            <td>
                                <select id="category">
                                    <option value="laptops">Ноутбуки</option>
                                    <option value="tablets">Планшеты</option>
                                    <option value="smartphones">Смартфоны</option>
                                    <option value="allinones">Моноблоки</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="title">Наименование товара: </label>
                            </td>
                            <td>
                                <input id="title" type="text" placeholder="наименование" maxlength="250" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="image">Изображение товара: </label>                                    
                            </td>
                            <td>
                                <input id="image" type="file" name="image" accept="image/*">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="description">Описание товара: </label>
                            </td>
                            <td>
                                <textarea id="description" cols="50" rows="5" maxlength="250" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="price">Цена товара в рублях: </label>
                            </td>
                            <td>
                                <input id="price" type="number" min="1" placeholder="целое число" required="">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="quantity">Количестао товара на складе: </label>
                            </td>
                            <td>
                                <input id="quantity" type="number" min="1" placeholder="целое число" required="">
                            </td>
                        <tr>
                            <td>
                                <input form="catalog" type="submit" value="Добавить товар">                                
                            </td>
                            <td>
                                <input type="reset" value="Сбросить">
                            </td>
                        </tr>
                    </table>
                    <div id="response2"></div>
            </fieldset>
        </form>
        </div>
        <br> <br><br><br><br><br><br><br>  		
    <!-- Конец контента сайта -->
    
