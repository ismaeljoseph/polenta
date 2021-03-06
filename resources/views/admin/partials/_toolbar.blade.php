<div id="{{ $id }}" class="edy-tb toolbar">

    <!-- Bold -->
    <button class="edy-tb-cmd" data-wysihtml5-command="bold" title="Gras" unselectable="on">
        <span aria-hidden="true" class="editor-button">@icon('bold')</span>
    </button>

    <!-- Italic -->
    <button class="edy-tb-cmd" data-wysihtml5-command="italic" title="Italique" unselectable="on">
        <span aria-hidden="true" class="editor-button">@icon('italic')</span>
    </button>

    <!-- Superscript -->
    <button class="edy-tb-cmd" data-wysihtml5-command="formatInline" data-wysihtml5-command-value="sup" title="Exposant" unselectable="on">
        <span aria-hidden="true" class="editor-button">@icon('superscript')</span>
    </button>

    <!-- Subscript -->
    <button class="edy-tb-cmd" data-wysihtml5-command="formatInline" data-wysihtml5-command-value="sub" title="Exposant" unselectable="on">
        <span aria-hidden="true" class="editor-button">@icon('subscript')</span>
    </button>

    <!-- Titre -->
    <button class="edy-tb-cmd" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2" title="Titre">
        <span aria-hidden="true" class="editor-button">@icon('header')</span>
    </button>

    <!-- Brand color -->
    <button class="edy-tb-cmd" data-wysihtml5-command="foreColor" data-wysihtml5-command-value="blue" title="Couleur">
        <span aria-hidden="true" class="editor-button">@icon('paint-brush')</span>
    </button>

    <span class="editor-separator">|</span>

    <!-- Blockquote -->
    <button class="edy-tb-cmd" data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="blockquote" title="Insérer une citation">
        <span aria-hidden="true" class="editor-button">@icon('quote-left')</span>
    </button>

    <!-- Epigraph -->
    <button class="edy-tb-cmd" data-wysihtml5-command="formatBlockAsEpigraph" data-wysihtml5-command-value="div" title="Insérer une exergue">
        <span aria-hidden="true" class="editor-button">❖</span>
    </button>

    @push('scripts')
        <script type="text/javascript">
            $(document).ready(function() {
                var nodeOptions = {
                    className: "epigraph",
                    classRegExp: /epigraph+/g,
                    toggle: true
                  };

                  wysihtml5.commands.formatBlockAsEpigraph = {
                    exec: function(composer, command) {
                        return wysihtml5.commands.formatBlock.exec(composer, "formatBlock", nodeOptions);
                    },

                    state: function(composer, command) {
                        return wysihtml5.commands.formatBlock.state(composer, "formatBlock", nodeOptions);
                    }
                  };
            });
        </script>
    @endpush


    <span class="editor-separator">|</span>

    <!-- Text align -->
    <button class="edy-tb-cmd" data-wysihtml5-command="alignLeftStyle" data-wysihtml5-command-value="left" title="Aligner à gauche">
        <span aria-hidden="true" class="editor-button">@icon('align-left')</span>
    </button>
    <button class="edy-tb-cmd" data-wysihtml5-command="alignRightStyle" data-wysihtml5-command-value="right" title="Aligner à droite">
        <span aria-hidden="true" class="editor-button">@icon('align-right')</span>
    </button>
    <button class="edy-tb-cmd" data-wysihtml5-command="alignCenterStyle" data-wysihtml5-command-value="center" title="Centrer horizontalement">
        <span aria-hidden="true" class="editor-button">@icon('align-center')</span>
    </button>

    <!-- Unordered list -->
    <button class="edy-tb-cmd edy-tb-g" data-wysihtml5-command="insertUnorderedList" title="Insérer une liste" unselectable="on" title="Liste">
        <span aria-hidden="true" class="editor-button">@icon('list')</span>
    </button>

    <!-- Ordered list -->
    <button class="edy-tb-cmd" data-wysihtml5-command="insertOrderedList" title="Insérer une liste numérotée" unselectable="on" title="Liste ordonnée">
        <span aria-hidden="true" class="editor-button">@icon('list-ol')</span>
    </button>

    <!-- Horizontal separation -->
    <button class="edy-tb-cmd" data-wysihtml5-command="insertHTML"  data-wysihtml5-command-value="<hr>" title="Insérer une séparation horizontale" unselectable="on">
        <span aria-hidden="true" class="editor-button">@icon('ellipsis-h')</span>
    </button>

    <span class="editor-separator">|</span>

    <!-- Create link -->
    <div class="edy-tb-menucontainer createlink">
        <button class="edy-tb-cmd edy-tb-g" data-wysihtml5-command="createLink" title="Créer un lien" unselectable="on" title="Lien">
            <span aria-hidden="true" class="editor-button">@icon('link')</span>
        </button>
        <div class="edy-reset edy-popover edy-itempicker" style="display: none;" data-wysihtml5-dialog="createLink">
            <div class="edy-popover-content">
                <div class="edy-form-group edy-tibtn-container">
                    <input type="text" name="query" class="edy-form-control edy-input-large" autocomplete="off" data-wysihtml5-dialog-field="href" value="http://">
                    <div class="edy-itempicker-input-btns">
                        <button class="edy-btn edy-btn-large edy-btn-green" data-wysihtml5-dialog-action="save">Insérer</button>
                        <button class="edy-btn edy-btn-large edy-btn-red" data-wysihtml5-action="cancel" unselectable="on">Annuler</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Remove link -->
    <button class="edy-tb-cmd" data-wysihtml5-command="removeLink" title="Supprimer le lien">
        <span aria-hidden="true" class="editor-button">@icon('chain-broken')</span>
    </button>

    @if (isset($image) && $image)
        <!-- Image -->

        <!-- Button trigger upload modal -->
        <button type="button" class="edy-tb-cmd" data-toggle="modal" data-target="#upload-modal-{{ $id }}" title="Insérer une image">
            <span aria-hidden="true">@icon('picture-o')</span>
        </button>
    @endif

    <span class="editor-separator">|</span>

    <!-- Undo -->
    <button class="edy-tb-cmd" data-wysihtml5-command="undo" title="Annuler la dernière action">
        <span aria-hidden="true" class="editor-button">@icon('undo')</span>
    </button>

    <!-- Change view -->
    <button class="edy-tb-cmd" data-wysihtml5-action="change_view" data-wysihtml5-command-value="change_view" title="Passser en vue HTML">
        <span aria-hidden="true" class="editor-button">@icon('code')</span>
    </button>
</div>
