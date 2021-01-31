<?php
/**
 * User: TheCodeholic
 * Date: 4/17/2020
 * Time: 9:20 AM
 */

?>

<aside class="shadow">
    <?php echo \yii\bootstrap4\Nav::widget([
    'options' => [
        'class' => 'd-flex flex-column nav-pills'
    ],
    'items' => [
        [
            'label' => 'Dashboard',
            'url' => ['/site/index']
        ],
        [
            'label' => 'จัดการสมาชิก',
            'url' => ['/profile/index']
        ],
        [
            'label' => 'Comments',
            'url' => ['/comment/index']
        ]
    ]
]) ?>
</aside>