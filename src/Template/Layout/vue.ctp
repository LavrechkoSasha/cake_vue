<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        lorem
    </title>
    <?= $this->Html->meta('icon') ?>



    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

</head>
<body>

<input type="hidden" id="csrf" value="<?= $this->request->getParam('_csrfToken'); ?>">

<?= $this->Flash->render() ?>
<div class="container clearfix">
    <?= $this->fetch('content') ?>
</div>

<footer>
</footer>
<?= $this->Html->script('dist/build.js') ?>
</body>
</html>