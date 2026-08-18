# AFLEX local setup

1. Copy `.env.example` to `.env` and replace the example passwords.
2. Run `./setup-aflex.sh`.
3. Open the `MOODLE_URL` value (default: http://localhost:8080).

The script is safe to rerun. Database and uploaded files live in Docker volumes.

## Change the branding

Sign in as an administrator, then open **Site administration → Appearance → Themes → AFLEX**.
The page provides controls for the logo, favicon, login background, primary colour, and custom SCSS.

User-facing core wording overrides live in `branding/lang/en_local/` (English) and
`branding/lang/am_local/` (Amharic - አማርኛ). Re-run `./setup-aflex.sh` after changing these files
to deploy them and purge Moodle's caches.

## Localization (English & Amharic - አማርኛ)

The platform supports both English and Amharic with full system-wide translation coverage:
- **Amharic configurations & fonts**: Configured in `branding/lang/am_local/langconfig.php` and `public/theme/aflex/scss/aflex.scss` (with `Noto Sans Ethiopic` font rendering).
- **Core, Navigation & Buttons**: Located in `branding/lang/am_local/moodle.php`.
- **Site Administration**: Located in `branding/lang/am_local/admin.php`.
- **Courses & Learning**: Located in `branding/lang/am_local/course.php`.
- **User Profiles & Preferences**: Located in `branding/lang/am_local/user.php`.
- **AFLEX & Boost Themes**: Located in `branding/lang/am_local/theme_aflex.php` and `theme_boost.php`.

Users can easily switch between English and Amharic from the language dropdown in the top navbar.

## Useful commands

- Start: `docker compose up -d`
- Stop: `docker compose down`
- Logs: `docker compose logs -f web`
- Purge caches: `docker compose exec web php admin/cli/purge_caches.php`
- Upgrade after updating Moodle: `docker compose exec web php admin/cli/upgrade.php --non-interactive`

For production, change all credentials, configure HTTPS, set `MOODLE_URL` to the public URL, and
enable scheduled cron execution for `admin/cli/cron.php`.
