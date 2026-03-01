# Rank Post Styling for phpBB 3.3

A phpBB extension that lets you assign a CSS class to each special rank. The class wraps the user's posts, search results, and profile view, allowing you to style them however you like — custom colors, backgrounds, images, etc.

The extension includes predefined rank styles for PBWoW3 and PBWoW3 Heroes (`blizz`, `mvp`, `propass`), and an option to display rank images as small overlays on user avatars.

## Features

- Assign a CSS class to any special rank via ACP > Manage Ranks
- Class is applied to posts (viewtopic), search results, and member profiles
- Small rank images toggle for PBWoW3 styles (overlays rank icon on avatar)
- Includes predefined styles for PBWoW3 and PBWoW3 Heroes
- Works with any style — define your own CSS classes for prosilver or custom styles

## Supported styles

| Style | Included styling |
|---|---|
| **All** (base) | Minimal example class `rankpoststyle1` |
| **PBWoW3** | Blizzard/MVP content colors, Propass avatar overlay, Blizzard avatar backgrounds |
| **PBWoW3 Heroes** | Post background images, avatar container sprites, content colors, profile view backgrounds |

## Requirements

- phpBB 3.3.0 or higher
- PHP 7.1.3 or higher

## Languages

Arabic, Croatian, Czech, Dutch, English, French, German, German (Sie), Italian, Polish, Portuguese, Russian, Slovak, Spanish, Spanish (tuteo), Swedish, Turkish, Ukrainian

## Installation

1. [Download the latest release](https://github.com/avandenberghe/RankPostStyling/releases) and unzip it.
2. Copy the contents to `/ext/avathar/rankpoststyling/`.
3. In ACP, go to `Customise -> Manage extensions`.
4. Find `Rank Post Styling` under "Disabled Extensions" and click `Enable`.

## Usage

### Assigning rank styles

1. Go to ACP > Users and Groups > Manage Ranks.
2. Edit a special rank and enter a CSS class name in the "Rank Style" field (e.g. `blizz`).
3. Posts by users with that rank will be wrapped in a container with your class applied.

![Rank listing](contrib/screenshot.png)

![Editing a rank](contrib/ranks.png)

PBWoW3 styles ship with predefined classes — just assign `blizz`, `mvp`, or `propass` to your ranks. For other styles, define your own rules:

```css
.myrank .content { color: #00C0FF; }
.myrank .content strong { color: #FFF; }
```

### Small rank images (PBWoW3)

1. On the rank edit page, set "Small rank images" to Yes.
2. Rank images will display as small overlays on the user avatar instead of in the standard position below it.

## Uninstallation

1. In ACP, go to `Customise -> Manage extensions`.
2. Click `Disable` for `Rank Post Styling`.
3. To permanently uninstall, click `Delete Data`, then delete the `/ext/avathar/rankpoststyling/` folder.

## License

[GNU General Public License v2](https://opensource.org/licenses/GPL-2.0)

(c) 2015 - PayBas
(c) 2020 - Sajaki
