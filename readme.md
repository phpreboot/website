## PHPReboot.com

Code quality: [![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/phpreboot/website/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/phpreboot/website/?branch=master)

Issues: [![Stories under development](https://badge.waffle.io/phpreboot/website.svg?label=status-UnderDev&title=Under%20Development)](http://waffle.io/phpreboot/website)
[![Stories assigned](https://badge.waffle.io/phpreboot/website.svg?label=status-assigned&title=Assigned)](http://waffle.io/phpreboot/website)
[![Ready to deploy](https://badge.waffle.io/phpreboot/website.svg?label=status-Committed&title=Ready%20to%20deploy)](http://waffle.io/phpreboot/website)

PHP Reboot mainly is a PHP developers community in Pune, India.

With the goal of helping PHP community (mainly in Pune but with online option, everywhere), we have following initiatives:

- PHP magazine (Collection of good and informative blog posts and news) in the form of magazine.
- PHP conference in India. Under planning, will be updated soon on [phpreboot.com](phpreboot.com)
- Support and initiate PHP user group culture in other Indian cities.
- Meet-up in Pune, India. PHPReboot started in early 2014 as local meet-up group. Since then, we are conducting regular local meet-ups. [Learn more & RSVP](meetup.com/phpreboot)

## This repository

This repository contains the code of phpreboot.com website which mainly have PHP Reboot magazine.

## What is PHP Reboot magazine? How it started?

### Requirement

I want to be expert level full stack (Web-)developer.

### problem

Learning PHP (or anything) and reaching expert level needs lot of dedication and hard-work.

**In details**

PHP is not just a language but a complete technology stach to provide Web solution. Thus as full stack developer, we must learn lot of technologies like databases (both RDBMS & NoSQL), HTML, CSS, javascript, caching, queue, Emails, etc. Once project is ready, we need to worry about security, optimization, server farms/management etc.

To make thing worse, technology changes rapidly. How to keep ourself updated?

### Solution

One of the solutions is `Learn from other's experience and mistakes`.

*Obviously along with learning by writing code. (For example, I made phpreboot.com in laravel to learn laravel at lower level :D )*

**Easy to say but how?**

In simple words, read, and read a lot what other developers are sharing. We need not to be masters and **we cant be master in each and everything** but by reading about what others are saying, we get basic concepts and when needed, we can read and research more about required tools/technology.

So **reading gives us idea of available tools/technology. First step of mastering a tool/technology is to know about it**. PHP reboot Magazine is all about that first step.

I personally have feedly account where I follow 100+ developers blogging about PHP and related technologies (+few about my personal hobbies). I read them regularly. As Technical architect/lead, to help/encourage my team to improve, I wanted them to read but how? This is where magazine idea begins.

PHP Reboot magazine is not ideally a magazine as we do not write. However **we simply collect blogs/tutorials from other developers and collect them in month & category format**, much similar to magazine.

Following individual blogs becomes difficult for many. Thus, PHP reboot magazine is just collecting blogs/tutorials, group them in category so that other have easy and central place to read. Although we must follow all categories but if someone is out of time (don't know how to manage time) and **want to follow just few categories, we have categories**.

### Contribution

PHP reboot magazine is a community magazine for developers;
- Written by developers (personal blog/tutorials),
- collected by developers (currently Kapil, but hope others will join)
- & meant for developers.

Like any community efforts, it depends on community to succeed, and I'm looking forward for active contribution.

If you are willing to contribute (just few minutes/hours a week), there are multiple ways to contribute:

- **Contribute to magazine**: I've my personal feedly account as initial and major source but I can't follow all technical blogs. If you think there is a good blog post, worth readable by all, please share it. It could also be your own blog post. There are two ways to contribute to magazine:
  - **Just let us know** about good articles by creating github issue to include article. Prefix issue title with `Include: `.
  - **Sending Pull request** is better way. Clone project, and use article generator `php artisan article:generate` to generate article JSON. Send us pull request with generated JSON file(s). Read [contribution guide](contribution-guide.md) for more details.
- **Contribute to phpreboot.com site**: We have many new features to develop (& obviously bugs). You can:
  - **Report issue/Suggest feature**: Create github issue to tell us how to make site better. It could be a bug, UI fix, text/typo fix or whole new feature request. Just try to make sure reported issues are not duplicate.
  - **Fix issues**: There are many reported issues; both minor bug fix & major feature request. PHP reboot is made using Laravel 5.1. If you know Laravel 5, you may help us by fixing few issues. Check [waffle.io](waffle.io/phpreboot/website) to see current issues and their status. Read [contribution guide](contribution-guide.md) for details.
    - Hey even if you do not know laravel (but know php), this is good chance to learn laravel. I personally made this site to learn laravel :D. Just read Laravel docs and review code, its very easy. Benefit:
      - You will learn laravel
      - You will learn coding best practices (Even if I reject PR, I'll give proper explanation and also how to improve)
      - You will learn TDD
      - You can add `open source contributor` in your CV.
      - Most important, if you contribute, you will hopefully also make habit of reading. This will have very good and long lasting effect on your professional career.
      - So go ahead, simply start with contributing 1 hour/week If you have any doubt, I'm there to help, just ask me with tweet `@kapilsharmainfo`.
  - **Code Review**: No one is perfect. If you are laravel expert, please review code and suggest improvements.
- **Sponsor**: Last but most important, all the finances are currently managed personally by Kapil Sharma. It include hosting charges, domain charges, meetup.com subscription, organizing local meet-ups, snacks during meet-up, items raffled during meet-up etc. If summed together, it costs dearly. You can sponsor any of above and **we will gladly put back-link+logo as sponsors on phpreboot.com + meetup.com page**. Sponsorship is also possible as:
  - **Hosting**: We currently have shared hosting on GoDaddy and unfortunately I can't afford better hosting. I'm actively looking sponsor for better hosting.
  - **Items to raffle**: To motivate developers, we raffle out few items during meet-up. You can sponsor any meaningful items to raffle out during meet-up. **Current meet-up sponsor is JetBrains**, which provide one free PHP Storm license every month to raffle out during meet-up.
  - **Meet-up speaker**: If you are in or around Pune and can share your knowledge, please consider sharing your knowledge during PHP reboot meet-up. (Well for me its sponsorship. It costs time & time is money).
