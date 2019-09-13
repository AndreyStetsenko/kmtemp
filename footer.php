    <footer>
      <div class="footline"><div>
      <div class="container_footer container">
        <div class="cont_foot__head">
          <h1>Gena <b>VITER</b></h1>
        </div>
        <div class="cont_foot__cent">
          <?php
            wp_nav_menu( array(
            	'container'       => 'div', // блок, в который нужно поместить меню, укажите false, чтобы не помещать в блок
            	'container_class' => 'cont_foot__menu', // css-класс блока
            	'menu_class'      => '', // css-класс меню
            	'echo'            => true, // вывести или записать в переменную
            	'fallback_cb'     => 'wp_page_menu', // какую функцию использовать если меню не существует, укажите false, чтобы не использовать ничего
            	'items_wrap'      => '<ul id=\"%1$s\" class=\"%2$s\">%3$s</ul>', // HTML-шаблон
            	'depth'           => 1 // количество уровней вложенности
            ));
           ?>
          <div class="cont_foot__contacts">
            <div class="cont_foot_c__head">
              <h3>Контакты</h3>
            </div>
            <div class="cont_foot_c__foot">
              <?php
                $rows = get_field('footer_contacts_p');
                if($rows)
                {
                	foreach($rows as $row)
                	{
                    echo '<div>';
                		echo '<span>' . $row['foot_pos_p'] . '</span>';
                    echo '<p>' . $row['foot_phone_p'] . '</p>';
                    echo '<p>' . $row['foot_email_p'] . '</p>';
                    echo '</div>';
                	}
                }
                ?>
            </div>
          </div>
        </div>
        <div class="cont_foot__foot">
          <p>&copy; 2019 <?php bloginfo('name'); ?>. <a href="#">Privacy Policy</a></p>
          <p>Designe and Develop <span><a href="https://fb.com/stetsenko.freelance" target="_blank">Stetsenko <b>Andrew</b></a></span> </p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>
