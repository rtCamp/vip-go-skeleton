# VIP Go Skeleton

Welcome to VIP! This repo is a starting point for building your VIP Go site, including all the base folders to be built on.

## Environments

| Environment | Branch  | URL                          |
|-------------|---------|------------------------------|
| Production  | master  | https://example.com          |
| Staging     | staging | https://staging.example.com  |
| Development | develop | https://dev.example.com      |

## Maintainer

### rtCamp Maintainers:

| Name                    | Github Username   |
|-------------------------|-------------------|
| [Name](mailto:email-id) |  @github_username |

### Client Representative: (if any)

| Name                    | Github Username   |
|-------------------------|-------------------|
| [Name](mailto:email-id) |  @github_username |

## Development Workflow

- Complete the features or bug fixes locally and push the branch to the GitHub repo.
- Raise a pull request (PR) against the develop branch.
- Assign that PR to Developer/EM for internal code review. If any code review feedback, the team needs to address it and push changes, update PR, and re-request code review.
- PR approved: Merge that into the develop branch and it will deploy to the development site. You can review the feature there.
- Perform internal QA on the development site.
- Follow the same steps to deploy the changes on QA (preprod) site. Code review is not required.
- Client will do the UAT on the QA site and they will approve.
- Once approved, you can raise the PR against the master branch and assign a PR to Developer/EM/VIP team for the final code review.
- PR approved: you can merge and it will deploy to the production site.

### Default Branch

`master`

### Branch naming convention

- For feature - `feature/issue-name` For example, `feature/add-plugin`
- For bug - `fix/issue-name` For example, `fix/phpcs-errors`

### Pull Request and issue notes

- Title should be same as Issue title. Also add issue number before title. For example, `#3 Setup initial theme`.
- Add proper description.
- Assign code reviewer and project.
- Create draft pull request for work in-progress PR and don't add `WIP:` in PR title.
- PR should have one approval.

## VIP-Go Guidebooks

We'd recommend starting with one of the following guidebooks. They include everything you need to know about launching and developing with VIP:

- [Launching with VIP](https://wpvip.com/documentation/launching-with-vip/)
- [Developing with VIP](https://wpvip.com/documentation/developing-with-vip/)

## Quick links to relevant documentation

To dig straight into our documentation and get up and running, try:

- [Understanding your VIP Go codebase](https://wpvip.com/documentation/vip-go/understanding-your-vip-go-codebase/)
- [VIP Go local development](https://wpvip.com/documentation/vip-go/local-vip-go-development-environment/)

## Usage

All the following directories are required and must not be removed:

- `client-mu-plugins`: for always active, global plugins (similar to `mu-plugins`) — see [our documentation](https://wpvip.com/documentation/vip-go/managing-plugins/#installing-to-the-client-mu-plugins-directory) for more information.
- `images`: Store your site's favicons here, per [this documentation](https://wpvip.com/documentation/vip-go/understanding-your-vip-go-codebase/#favicons). All other public-facing images should be uploaded or [imported](https://wpvip.com/documentation/launching-with-vip/content-migration/) to the WordPress dashboard or stored as part of your `/theme/` assets.
- `languages`: For `.po` and `.mo` translation files, which specify the translated strings for the site.
- `plugins`: Your site's plugins — more details [here](https://wpvip.com/documentation/vip-go/managing-plugins/#installing-to-the-plugins-directory).
- `private`: Provides access to files that are not directly web accessible, but can be accessed by your theme or plugin code — [more details here](https://wpvip.com/documentation/vip-go/understanding-your-vip-go-codebase/#using-private).
- `themes`: Themes to be made available to your sites. We recommend keeping the default theme available for [testing purposes](https://wpvip.com/documentation/testing-your-site/).
- `vip-config`: For custom configuration changes and additional `sunrise.php` [code](https://wpvip.com/documentation/vip-go/sunrise-php-on-vip-go/). This folder’s `vip-config.php` file is used in place of `wp-config.php`.

These directories will also be available on production web servers. Any additional directories created in your GitHub repository that are not included in the above list will not be mounted onto your site, and so will not be web-accessible.

## Support

If you need help with anything, VIP's support team is [just a ticket away](https://wpvip.com/documentation/vip-go/accessing-vip-support/).
