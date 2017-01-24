<?php

use yii\helpers\Url;

\humhub\modules\devtools\assets\DevtoolsAsset::register($this);
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <?= Yii::t('DevtoolsModule.base', '<strong>Developer</strong> Tools'); ?>
    </div>
    <div class="panel-body">

        <div id="wmd-button-bar"></div>

        <div contenteditable="true" id="wmd-input" class="wmd-input"></div>

        <!-- div id="wmd-preview" class="wmd-panel wmd-preview"></div -->

        <script>
            var converter = new Markdown.Converter();
            Markdown.Extra.init(converter);
            
            $editor = new Markdown.Editor(converter);
            $editor.run();
            
        </script>

        <p>
            Welcome to the HumHub DevTools, the following showcases describe the use of some build in HumHub components.
        </p>
        <br />
        <div class="devpanel-head">
            <h1><i class="fa fa-chevron-circle-down"></i>Showcases</h1>
        </div>
        <div class="devpanel-body">
            <?=
            \humhub\modules\devtools\widgets\PanelRow::widget([
                'items' => [
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Modals'), 'url' => Url::to(['/devtools/showcase/view', 'id' => 'modal']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use modals for displaying data as forms or requesting confirmations.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Loader'), 'url' => Url::to(['/devtools/showcase/view', 'id' => 'loader']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Lean how to use loader animations as user feedback.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Status'), 'url' => Url::to(['/devtools/showcase/view', 'id' => 'status']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the status bar for your user feedback.')]
                ]
            ]);
            ?>

            <?=
            \humhub\modules\devtools\widgets\PanelRow::widget([
                'items' => [
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Userpicker'), 'url' => Url::to(['/devtools/showcase/view', 'id' => 'userpicker']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use a user picker field.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Spacepicker'), 'url' => Url::to(['/devtools/showcase/actions']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use a space picker field.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Custom Picker'), 'url' => Url::to(['/devtools/showcase/events']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to create your own picker field.')]
                ]
            ]);
            ?>

            <?=
            \humhub\modules\devtools\widgets\PanelRow::widget([
                'items' => [
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Client'), 'url' => Url::to(['/devtools/showcase/client']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the ajax client module to submit forms or request other data.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Upload'), 'url' => Url::to(['/devtools/showcase/view', 'id' => 'upload']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to create custom ui components.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Actions'), 'url' => Url::to(['/devtools/showcase/actions']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the Javascript action api.')]
                ]
            ]);
            ?>

            <?=
            \humhub\modules\devtools\widgets\PanelRow::widget([
                'items' => [
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Client'), 'url' => Url::to(['/devtools/showcase/client']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the ajax client module to submit forms or request other data.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Actions'), 'url' => Url::to(['/devtools/showcase/actions']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the Javascript action api.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Components'), 'url' => Url::to(['/devtools/showcase/events']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to create custom ui components.')]
                ]
            ]);
            ?>

            <?=
            \humhub\modules\devtools\widgets\PanelRow::widget([
                'items' => [
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Config'), 'url' => Url::to(['/devtools/showcase/config']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the Javascript configuration to transfer data from php to your Javascript modules.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Text'), 'url' => Url::to(['/devtools/showcase/text']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Lean how to use the text utility to transfer translated text to your Javascript modules.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Log'), 'url' => Url::to(['/devtools/showcase/log']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to use the Javascript log module.')]
                ]
            ]);
            ?>
        </div>

        <br />

        <div class="devpanel-head">
            <h1><i class="fa fa-chevron-circle-down"></i>Tutorials</h1>
        </div>
        <div class="devpanel-body">
            <?=
            \humhub\modules\devtools\widgets\PanelRow::widget([
                'items' => [
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'My first Module'), 'url' => Url::to(['/devtools/tutorial/first']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Create your first HumHub module.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Build a Question Module'), 'url' => Url::to(['/devtools/tutorial/question']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to create a question module with own stream entries and permissions.')],
                    ['title' => Yii::t('DevtoolsModule.views_index_index', 'Question Module Migration'), 'url' => Url::to(['/devtools/tutorial/migration']), 'text' => Yii::t('DevtoolsModule.views_index_index', 'Learn how to extend an existing module by means of migrations.')]
                ]
            ]);
            ?>
        </div>
    </div>
</div>