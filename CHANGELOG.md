# Changelog

## 2.0.1 (2026-04-23)
- [NEW] Added built-in rank styles: rps-developer, rps-support, rps-moderator, rps-founder, rps-mvp, rps-styles
- [CHG] Removed unused `$cache` property from listener
- [CHG] Changed `get_rank_style` visibility from public to protected
- [CHG] Memberlist div wrapper now conditional on RANK_STYLE having a value
- [CHG] Removed `rps_version` config key (phpBB tracks extension versions via ext_manager)

## 2.0.0 (2026-03-02)
- [NEW] Forked to avathar/rankpoststyling namespace
- [NEW] Added `rank_style` database column via migration
- [NEW] Small rank images toggle (`S_PBWOW_SMALL_RANKS` template variable) for PBWoW3 styles
- [NEW] ACP setting on rank edit page to enable/disable small rank image overlays
- [NEW] Added PBWoW3 style support (rank CSS and images)
- [NEW] Added language files for 18 languages
- [CHG] Updated PHP headers to phpBB standards
- [CHG] Updated for phpBB 3.3 compatibility

## 1.0.7 (2020-06-29)
- [NEW] phpBB 3.3 support
- [NEW] Dropped support for phpBB 3.1

## 1.0.6 (2017-12-13)
- [NEW] PBWoW Heroes support

## 1.0.5 (2017-09-18)
- [NEW] phpBB 3.2 support

## 1.0.4 (2016-03-20)
- [NEW] Autoload CSS in overall_header_head_append
- [NEW] Italian translation (Mauron)
- [CHG] Added tutorial
