    <!-- Контент сайта -->
		<div class="reg">
			<p>Чтобы совершать покупки в нашем магазине вам необходимо зарегистрироваться</p>
	        <form id="register" >
	            <fieldset>
	                <table class="register">
	                	<tr>
	                        <td>
	           	                <label for="login">Выберите логин: </label>
	                        </td>
	                        <td>
	                            <input id="login" type="text" placeholder="логин" required>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td>
	           	                <label for="name">Ваше имя: </label>
	                        </td>
	                        <td>
	                            <input id="name" type="text" placeholder="ваше имя" required>
	                        </td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<label for="email">E-mail: </label>
	                    	</td>
							<td>
								<input id="email" type="text" placeholder="e-mail" required>
							</td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<label for="pwd">Пароль: </label>
	                    	</td>
							<td>
								<input id="pwd" type="password" placeholder="пароль" required>
							</td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<label for="birthdate">Дата рождения: </label>
	                    	</td>
	                    	<td>
	                    		<input id="birthdate" type="date" required>
	                    	</td>
	                    </tr>
	                    <tr>
	                    	<td>
	                    		<label for="sex">Пол: </label>
	                    	</td>
	                    	<td>
								<select id="sex">
									<option value="Мужской">Мужской</option>
									<option value="Женский">Женский</option>
									<option value="Не выбрано">Не выбрано</option>
								</select>
							</td>
						<tr>
							<td>
								<input type="submit" value="Отправить">
								<input type="reset" value="Сбросить">
							</td>
						</tr>
	                </table>
					<div id="response"></div>
	           </fieldset> 
	        </form>
		</div>		
    <!-- Конец контента сайта -->
