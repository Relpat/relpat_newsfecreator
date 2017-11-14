
plugin.tx_relpatnewsfecreator_newsfrontendcreator {
  view {
    templateRootPaths.0 = EXT:relpat_newsfecreator/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_relpatnewsfecreator_newsfrontendcreator.view.templateRootPath}
    partialRootPaths.0 = EXT:relpat_newsfecreator/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_relpatnewsfecreator_newsfrontendcreator.view.partialRootPath}
    layoutRootPaths.0 = EXT:relpat_newsfecreator/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_relpatnewsfecreator_newsfrontendcreator.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_relpatnewsfecreator_newsfrontendcreator.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_relpatnewsfecreator._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-relpat-newsfecreator table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-relpat-newsfecreator table th {
        font-weight:bold;
    }

    .tx-relpat-newsfecreator table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)
