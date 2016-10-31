# Contribution guide

Thanks for deciding to contribute.

If you wish to send PR for adding articles or fixing issues, you need to first setup project locally. However, it is also important to understand our workflow so that your hard work is not wasted in a rejected PR.

## Workflow

We follow gitflow workflow.

However, starting from September 2016, there will be no direct push to main repository `github.com/phpreboot/website`. All the changes will come through PR, regardless of change type. (Only kapilsharma have commit right but rule will apply on him as well)

So first step of contribution is to fork the project on github, and then, you will have a different project like `github.com/<your-name>/website`. Now checkout it.

## Prerequisite

Obviously, a computer. :D Kidding.

Your system must have:

- Git (mandatory)
- PHP (mandatory)
- Composer (mandatory)
- Vagrant & Virtual box (recommended, we use scotch box so you can simply do `vagrant up` inside your local `website` folder.)

## Setting project locally

### Checkout your fork.

```bash
git clone https://github.com/<your-name>/website
```

Please replace `<your-name>` with your github user name.

### Copy .env

We need to make a copy of `.env.example` as `.env`

```bash
cd website
cp .env.example .env
```

After that, edit `.env` file with database settings. You need to create empty database. If you are using `scotchbox`, you do not need to change anything right now.

However, if you are using local LAMP setup or WAMP/MAMP/XAMPP etc, create empty database and update .env file.

### Composer install

(Prerequisite, composer installed. If you are using scotchbox, its available through `vagrant ssh`.)
We use composer to install all dependencies, running the following command: 

```bash
composer install
```

### Generating keys

Laravel use an unique key for its internal encryption feature and we need to generate it, by running the following command:

```bash
php artisan key:generate
```

### Database migration and seeding

We use database migration to create database structure and seeding it to insert initial categories. Run following commands:

```bash
composer dump-autoload
php artisan migrate
php artisan db:seed
```

### Importing articles

PHP reboot saves all articles in the database for current and future optimization purpose. (If in future we have higher traffic and better hosting options, we may move to Solr or NoSQL or another RDBMS.)

However, we also depend on contributions from the community. Contributions are not possible without local setup and keeping an updated copy of database to distribute is also not possible.

Thus, we worked on article JSON files, which can be committed to git and can be used to generate whole database.

However, current artisan command can import one file at a time. A github issue is already created to import all files with one command but until that issue is solved, we need to import files one by one.

All JSON files are committed in folder `data/articles`. It further contain folders in format `yyyymm`. For example 201608 will contain files having articles added to PHP Reboot magazine in August 2016 issue. That folder further contain files with format `x.json`, where `x` is positive integer in increasing order, starting with 1.

Command to import is `php artisan article:import yyyymm-x`. Thus, to import `1.json` from folder `201608`, command is `php artisan article:import 201608-1`.

Import enough articles locally to have local website ready.

Congratulations, your local website is up and running. What will you contribute now?

## Contribution

Once local site is ready, you can start contributing. There is one more setting to be done.

### Adding remote upstream

Some key terms:

- PHP Reboot repo: Main repository of PHP reboot https://github.com/phpreboot/website
- fork: Repository you make through form https://github.com/<your-name>/website.
- remote: Git specific term to represent different repository.
- origin: Default remote of git. On your checkout, it will represent your fork.
- upstream: Suggested remote name for PHP Reboot Repo.
- PR (pull request): It's you asking the PHP Reboot Repo to review and accept/reject your modifications.

In git, remotes represents repository. With clone of your fork, you get your first remote as `origin`, which points to your github repository. You can check it with command `git remote -v`.

However you must keep your repository updated and synchronized with PHP reboot main repository. Lets call this main repository as `upstream`. Lets add it:

```bash
git remote-add upstream https://github.com/phpreboot/website
```

Now try `git remote -v` again and you can see two repositories. Now you will pull from upstream (PHP Reboot main repo) `git pull upstream master` and push to origin (Your forked repo) `git push origin master`. To submit your changes, you will create pull request from your fork on github.

There are many tutorial/articles available for that but if you still have doubts, please ping me on twitter (Tweet with `@kapilsharmainfo`).

### Contributing articles

All articles are pushed to master branch of PHPReboot, but locally, we recommend to make them on `articles` branch. Lets create a branch (for first time):

```bash
git checkout -b articles
```

Now to generate a JSON file for an article, run command `php artisan article:generate`. It will ask few questions. Read questions carefully and answer correctly. Once successfully executed, it will generate a json file under `data/articles/yyyymm` folder.

Import generated file with command `php artisan article import yyyymm-x` and visit imported page locally to check file is correctly generated. Once satisfied, push new json file

```bash
git add data/articles/yyyymm/x.json
git commit -m "Article: <article title> to yyyymm issue."
git push origin articles
```

Once pushed to fork, go to github and create a pull request.

**Adding further articles**

If you are adding new articles after few days, you first need to update. Run following commands:

```bash
git checkout master
git pull upstream master
git push origin master
git checkout articles
git merge master
```

Then follow above procedure to generate articles and send PR.

### Contributing issues

Great.

First confirm, on waffle.io/phpreboot/website, issue is available under `backlog` column. If it is in `assigned` column, someone else is working on it. Let's not duplicate the efforts.

Before you start fixing any issue, please read whole description and comments to understand desired solution. If you are confident you can solve issue, please put comment to assign issue to you. We will add you name as `assigned` and move issue to `assigned` column on waffle.

Please note, issue must be solved on issue branch, which is created from development branch. So branch structure is `master -> development -> issue-xx`, where `xx` is issue number. Run following command to get latest code (Assuming you are solving issue 100)

```bash
git checkout master
git pull upstream master
git push origin master
git checkout development
git pull upstream development
git push origin development
git checkout -b issue-100
```

Now fix the issue and test it locally. Once you think issue is fixed, and you are ready to send PR, get update to avoid any merge conflict in PR.

```bash
git add <all new/modified files>
git commit -m "Issue#100 <message>"
git checkout development
git pull upstream development
git push origin development
git checkout issue-100
git merge development
git push origin issue-100
```

Great, go to github and create new PR. Please make sure you send PR to new branch or development on upstream.
