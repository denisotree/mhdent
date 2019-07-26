<?php

/**
 *  Функция добавляет дополнительные настройки в основной блок настроек админки
 */


add_action('admin_init', 'additional_settings');

function additional_settings()
{
    add_settings_section(
        'over_options',
        'Дополнительные настройки сайта',
        'over_option_description',
        'general'
    );

    add_settings_field(
        'contact_phone',
        'Контактный телефон',
        'contact_phone_field',
        'general',
        'over_options'
    );

    register_setting('general', 'contact_phone');

    add_settings_field(
        'contact_email',
        'Контактный email',
        'contact_email_field',
        'general',
        'over_options'
    );

    register_setting('general', 'contact_email');

    add_settings_field(
        'opening_hours_ru',
        'График работы по русски',
        'opening_hours_ru_field',
        'general',
        'over_options'
    );

    register_setting('general', 'opening_hours_ru');

    add_settings_field(
        'opening_hours_en',
        'График работы по английски',
        'opening_hours_en_field',
        'general',
        'over_options'
    );

    register_setting('general', 'opening_hours_en');

    add_settings_field(
        'facebook',
        'Адрес в Facebook',
        'facebook_field',
        'general',
        'over_options'
    );

    register_setting('general', 'facebook');

    add_settings_field(
        'vk',
        'Адрес в Вконтакте',
        'vk_field',
        'general',
        'over_options'
    );

    register_setting('general', 'vk');

    add_settings_field(
        'instagram',
        'Адрес в Instagram',
        'instagram_field',
        'general',
        'over_options'
    );

    register_setting('general', 'vk');

    add_settings_field(
        'contact_address_ru',
        'Адрес клиники по русски',
        'contact_address_ru_field',
        'general',
        'over_options'
    );

    register_setting('general', 'contact_address_ru');

    add_settings_field(
        'contact_address_en',
        'Адрес клиники по английски',
        'contact_address_en_field',
        'general',
        'over_options'
    );

    register_setting('general', 'contact_address_en');

    add_settings_field(
        'copyright_ru',
        'Копирайт по русски',
        'copyright_ru_field',
        'general',
        'over_options'
    );

    register_setting('general', 'copyright_ru');

    add_settings_field(
        'copyright_en',
        'Копирайт по английски',
        'copyright_en_field',
        'general',
        'over_options'
    );

    register_setting('general', 'copyright_en');

    add_settings_field(
        'api_key',
        'API ключ для карт Google',
        'api_key_field',
        'general',
        'over_options'
    );

    register_setting('general', 'api_key');

}

function over_option_description()
{
    echo '<p>Настройки для главной страницы сайта</p>';
}

function contact_phone_field()
{
    echo '<input 
		name="contact_phone"  
		type="text" 
		value="' . get_option('contact_phone') . '" 
		class="code2"
	 />';
}

function contact_email_field()
{
    echo '<input 
		name="contact_email"  
		type="text" 
		value="' . get_option('contact_email') . '" 
		class="code2"
	 />';
}

function opening_hours_ru_field()
{
    echo '<textarea 
		name="opening_hours_ru"
		class="code2"
		rows="4"
	 >' . get_option('opening_hours_ru') . '</textarea>';
}

function opening_hours_en_field()
{
    echo '<textarea 
		name="opening_hours_en"
		class="code2"
		rows="4"
	 >' . get_option('opening_hours_en') . '</textarea>';
}

function facebook_field()
{
    echo '<input 
		name="facebook"  
		type="text" 
		value="' . get_option('facebook') . '" 
		class="code2"
	 />';
}

function vk_field()
{
    echo '<input 
		name="vk"  
		type="text" 
		value="' . get_option('vk') . '" 
		class="code2"
	 />';
}

function instagram_field()
{
    echo '<input 
        name="instagram"  
        type="text" 
        value="' . get_option('instagram') . '" 
        class="code2"
     />';
}

function contact_address_ru_field()
{
    echo '<input 
		name="contact_address_ru"
		value="' . get_option('contact_address_ru') . '" 
		class="code2"
		type="text"
	 />';
}

function contact_address_en_field()
{
    echo '<input 
		name="contact_address_en"
		value="' . get_option('contact_address_en') . '" 
		class="code2"
		type="text"
	 />';
}

function copyright_ru_field()
{
    echo '<input 
		name="copyright_ru"
		value="' . get_option('copyright_ru') . '" 
		class="code2"
		type="text"
	 />';
}

function copyright_en_field()
{
    echo '<input 
		name="copyright_en"
		value="' . get_option('copyright_en') . '" 
		class="code2"
		type="text"
	 />';
}

function api_key_field()
{
    echo '<input 
		name="api_key"
		value="' . get_option('api_key') . '" 
		class="code2"
		type="text"
	 />';
}
