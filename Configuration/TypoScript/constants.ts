
plugin.tx_relpatnewsfecreator_newsfrontendcreator {
  view {
    # cat=plugin.tx_relpatnewsfecreator_newsfrontendcreator/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:relpat_newsfecreator/Resources/Private/Templates/
    # cat=plugin.tx_relpatnewsfecreator_newsfrontendcreator/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:relpat_newsfecreator/Resources/Private/Partials/
    # cat=plugin.tx_relpatnewsfecreator_newsfrontendcreator/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:relpat_newsfecreator/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_relpatnewsfecreator_newsfrontendcreator//a; type=string; label=Default storage PID
    storagePid =
  }
}
