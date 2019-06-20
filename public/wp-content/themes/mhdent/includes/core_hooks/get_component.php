<?php

/**
 * Функция, расширяющая get_template_part.
 * Позволяет передавать переменные в компонент в массиве вторым аргументом.
 *
 * @var string $template — адрес к компоненту с .php
 * @var array $context — переменные компонента в массиве
 * @var string $delimeter — делиметр для слов в имени файла компонента ( - | _ )
 *
 */


function get_component($template, array $context = [], $delimeter = '-')
{
    if (!isset($template)) {
        return;
    }

    if (!file_exists($template)) {
        return;
    }

    $templateParts = explode($delimeter, str_replace('.php', '', (string)$template));
    $templates[] = array_shift($templateParts);
    foreach ($templateParts as $i => $templatePart) {
        $templates[] = $templates[$i] . $delimeter . $templatePart;
    }
    $templates = array_map(function ($template) {
        return $template . '.php';
    }, $templates);
    $template = locate_template(array_reverse($templates));
    extract($context);
    /** @noinspection PhpIncludeInspection */
    include apply_filters('sage/locate_template', $template, $templates) ?: $template;
}
