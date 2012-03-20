{% extends "FOSUserBundle::layout.html.twig" %}
<?php $view->extend('FOSUserBundle::layout.html.php') ?>

{% block fos_user_content %}
<?php $view['slots']->output('block fos_user_content') ?>
{% if error %}
<?php if($error):?>
    <div>{{ error|trans({}, 'FOSUserBundle') }}</div>
{% endif %}
<?php endif; ?>

<form action="<?php $view['router']->generate('fos_user_security_check') ?>" method="post">
    <input type="hidden" name="_csrf_token" value="<?php $csrf_token ?>" />

    <label for="username">{{ 'security.login.username'|trans({}, 'FOSUserBundle') }}</label>
    <input type="text" id="username" name="_username" value="{{ last_username }}" />

    <label for="password">{{ 'security.login.password'|trans({}, 'FOSUserBundle') }}</label>
    <input type="password" id="password" name="_password" />

    <input type="checkbox" id="remember_me" name="_remember_me" value="on" />
    <label for="remember_me">{{ 'security.login.remember_me'|trans({}, 'FOSUserBundle') }}</label>

    <input type="submit" id="_submit" name="_submit" value="{{ 'security.login.submit'|trans({}, 'FOSUserBundle') }}" />
</form>
{% endblock fos_user_content %}
