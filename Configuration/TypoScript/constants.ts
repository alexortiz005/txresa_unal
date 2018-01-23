
plugin.tx_resaunal_estudioresa {
    view {
        # cat=plugin.tx_resaunal_estudioresa/file; type=string; label=Path to template root (FE)
        templateRootPath = EXT:resa_unal/Resources/Private/Templates/
        # cat=plugin.tx_resaunal_estudioresa/file; type=string; label=Path to template partials (FE)
        partialRootPath = EXT:resa_unal/Resources/Private/Partials/
        # cat=plugin.tx_resaunal_estudioresa/file; type=string; label=Path to template layouts (FE)
        layoutRootPath = EXT:resa_unal/Resources/Private/Layouts/
    }
    persistence {
        # cat=plugin.tx_resaunal_estudioresa//a; type=string; label=Default storage PID
        storagePid =
    }
}
