
plugin.tx_resaunal_estudioresa {
    view {
        templateRootPaths.0 = EXT:resa_unal/Resources/Private/Templates/
        templateRootPaths.1 = {$plugin.tx_resaunal_estudioresa.view.templateRootPath}
        partialRootPaths.0 = EXT:resa_unal/Resources/Private/Partials/
        partialRootPaths.1 = {$plugin.tx_resaunal_estudioresa.view.partialRootPath}
        layoutRootPaths.0 = EXT:resa_unal/Resources/Private/Layouts/
        layoutRootPaths.1 = {$plugin.tx_resaunal_estudioresa.view.layoutRootPath}
    }
    features {
        #skipDefaultArguments = 1
        # if set to 1, the enable fields are ignored in BE context
        ignoreAllEnableFieldsInBe = 0
        # Should be on by default, but can be disabled if all action in the plugin are uncached
        requireCHashArgumentForActionArguments = 1
    }
    mvc {
        #callDefaultActionIfActionCantBeResolved = 1
    }
}

page{
    includeCSS {
        style = EXT:resa_unal/Resources/Public/Css/style.css
     }
    
    includeJS{
        script = EXT:resa_unal/Resources/Public/Js/script.js
    }
}
