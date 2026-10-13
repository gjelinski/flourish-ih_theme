# Flourish Integrated Health — WordPress theme

The official responsive block theme (Gutenberg / full site editing) for **Flourish Integrated Health**, a women's health clinic opening in Edmonton, Alberta in Fall 2027. It is built on the **Flourish Brand Style Guide (2026, Explora Creative)**.

| Desktop | Mobile | Mobile menu |
|---|---|---|
| ![Desktop home](docs/previews/desktop-home.jpg) | ![Mobile home](docs/previews/mobile-home.jpg) | ![Mobile menu](docs/previews/mobile-menu.jpg) |

## Install (WordPress Admin)

1. Download **[`dist/flourish.zip`](dist/flourish.zip)**.
2. Go to **Appearance → Themes → Add New Theme → Upload Theme**, choose `flourish.zip`, click **Install Now**, then **Activate**.
3. Go to **Settings → Permalinks** and choose **Post name**.
4. Upload **[`docs/brand-assets/site-icon-512.png`](docs/brand-assets/site-icon-512.png)** as the site icon (favicon): **Appearance → Editor → Styles** or **Settings → General → Site Icon**. It is the guide's icon: the Earth monogram on a Dune circle.
5. Create the pages **Services**, **Our Team**, **About**, **Resources** and **Contact**. In each one, open the inserter → **Patterns → Flourish: Full pages**, insert the matching layout, and choose the **Landing Page (no title, full width)** template.
6. Edit the menus, hours, address and announcement bar in **Appearance → Editor**.

To rebuild the zip after changing files, run `bin/build-zip.sh`.

## How the brand guide is applied

### Colours (guide p. 16–17)

| Name | Hex | Used for (per the colour-proportion guidance) |
|---|---|---|
| Pearl | `#FBFBF9` | Main page background |
| Blush | `#F2E6D8` | Main background: page headers, CTA panel, mobile menu |
| Cream | `#F7F0E8` | Secondary background: values bar |
| Dune | `#E5CDB5` | Secondary background: footer, mission section, icon circles |
| Terra | `#D9B595` | Buttons |
| Clay | `#A69486` | Logo in the main menu, hairlines, form borders |
| Earth | `#422921` | Text, headings, announcement bar, small details |
| White | `#FFFFFF` | Cards |

**Accessibility note:** Terra and Clay are too light for small text on the brand backgrounds (about 1.8:1 and 2.8:1 contrast; WCAG asks for 4.5:1). The theme keeps them for backgrounds, buttons, icons and the logo, as the guide intends. For small text it adds two darker tints: **Clay — text** `#665548` and **Terra — text** `#7D5F44` (the Poppins caps subheaders). All text meets WCAG AA. Buttons use Earth text on Terra (7:1), matching the guide's website mock-up.

### Typography (guide p. 21–22)

- **Marcellus** for headings.
- **Poppins** for subheaders (uppercase, letter-spaced), body text, navigation and buttons.
- **Cormorant Garamond Italic** for quotes and special moments only. Use the **Accent** paragraph style or the Quote block, and pair it with Poppins, never with a Marcellus heading in the same composition.
- All three fonts are bundled in the theme. The site makes no requests to Google Fonts, which helps patient privacy.

### Logos (guide p. 4–14)

All six logo forms were taken as vector artwork directly from the guide's PDF: primary, wordmark, brand mark, monogram, lettermark and text mark. Each comes in Earth, Clay and White, in `flourish/assets/images/logo/` and `docs/brand-assets/logos/`.

- **Header:** the primary logo in Clay, as in the guide's website example.
- **Footer:** the primary logo in Earth on Dune, plus the "A space to flourish" text mark as a sign-off.
- **Decoration:** the wordmark appears as a faint watermark (the guide's "subtle background graphic"), and the monogram is available as a separator style.
- The logos are only ever scaled by width, never stretched, and never given shadows or effects.

### Look and voice (guide p. 2)

- **Look:** premium, minimal, peaceful and earthy. That means flat colour with no gradients, square buttons and cards, and hairline borders.
- **Copy:** uses the guide's own phrases: "Make sense of what's going on with your health", "Supporting women in midlife and beyond", "Book your session", "Figuring this out together" and "A space to flourish".

## What's included

```
flourish/
├── style.css, theme.json, functions.php, readme.txt, screenshot.png
├── templates/   front-page, home, index, single, page, archive, search, 404,
│                page-landing (no title), page-sidebar-cta (sticky booking card)
├── parts/       header, footer, announcement bar
├── patterns/    header, footer, hero, trust-bar, services-grid, welcome-split,
│                approach-steps, mission-quote, team-grid, faq, location-hours,
│                cta-waitlist, page-header, post-grid + full pages: home, services, about, contact
└── assets/      css/theme.css, fonts/ (Marcellus, Poppins, Cormorant + OFL licences),
                 images/ (logo/ suite, icons, placeholder illustrations)
docs/brand-assets/   logo SVGs + site-icon-512.png
```

**Block styles** (in the block sidebar under *Styles*):
- Group: Card, Rounded panel
- Image: Arch
- Paragraph and Heading: Subheader (Poppins caps), Lead, Accent (Cormorant italic)
- List: Checkmarks
- Button: Soft
- Separator: Monogram

## Before launch: content to replace

- **Photography:** the hero, welcome and team images are illustrated placeholders. Replace them with photos in the guide's style ("peaceful, reflective, slightly lived-in").
- **Contact details:** `[Street address]`, `[Postal code]`, `780-000-0000`, `hello@example.com`, hours and social links.
- **Content:** practitioner names and photos, and the service details. The service list is a placeholder aimed at midlife care.
- **Map:** add an Embed or Custom HTML block on the Contact page.
- **Contact or waitlist form:** add one with a form plugin, and don't collect health details through it. Alberta's *Health Information Act* applies.
- **Land acknowledgement:** the footer has starter Treaty 6 wording. Please have the clinic confirm it.
- **Testimonials:** the guide shows a "Kind words" patient testimonial. However, CPSA (College of Physicians & Surgeons of Alberta) advertising standards restrict testimonials for physician services, so the theme uses a mission statement in the same style. Confirm with the clinic before adding any testimonials.

## Compatibility

Requires WordPress 6.7+ and PHP 7.4+, using `theme.json` schema v3. It was tested by installing `flourish.zip` through WordPress's theme installer on a WordPress 7.x development build. Every pattern, template and template part passes the block editor's validator, and pages have no horizontal scrolling at 390px or 1440px.
