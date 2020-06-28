# CONTRIBUTING TO WebForum_SMS PROJECT

**Table Of Contents**

- [Creating a branch](#creating-a-branch)
- [Committing Changes Locally](#committing-changes-locally)
  - [Adding Changes](#adding-changes)
  - [Backout Changes](#backout-changes)
  - [Committing Changes](#committing-changes)
- [Sending Changes to Github](#sending-changes-to-github)
- [Creating a Pull Request](#creating-a-pull-request)
- [Making changes to an existing pull request](#making-changes-to-an-existing-pull-request)
- [Thank you](#thank-you)


## Creating a branch

Once you find the issue that you want to work on, make sure to view the issue details page and review list of comments for the issue to ensure that someone else has not already signed up to work on the issue.  If no one has signed up to work on the issue then add a comment to the issue stating that you are going to work on it.  This allows both the maintainers of WebForum_SMS as well as other contributors to know that someone is working on this issue so that they do not also work on it.      

To add a comment to an issue, click on the issue to go to the details page for the issue.  In the text box at the bottom of the page add a "I am working on this" comment and click the comment button.

Once you click the Comment button your comment will be added to the list of comments on the issue.  

Now that you have signed up for the issue on Github, you need to create a branch.  

**Steps to Create the Branch**

The first thing we are going to do is make sure that your forked repository is in sync with the [https://github.com/MikeAdeO/WebForum_SMS](MikeAdeO/WebForum_SMS) repository using the upstream.

1. Open a command prompt and navigate to the WebForum_SMS folder.
1. Make sure we are on the master branch by running:

        git checkout master

1. To download all of the changes from MikeAdeO/WebForum_SMS but not merge them run:

        git fetch upstream

1. To merge the upstream changes into your local master branch run:

        git merge upstream/master

1. To send the synced changes from your local repository to Github run:

        git push
        
1. Create and checkout our issue branch. **Replace "####" with the Github issue number.**  

        git checkout -b issue-branch-###        

You are now ready to code away.


## Committing Changes Locally

Before you can commit changes to your repository, you need to add them into your repository.  

**See Changes To Be Made**

To see the list of files and directories that have been added, changed or deleted run that have both been staged and not staged run:

```
git status
```  

### Adding Changes

To add the changes, you can either go file by file or add all of them at once.  

**File By File**

```
git add [file name]
```

**Add All Changes**

```
git add .
```

### Backout Changes

**Staged File**

To check if a file has been staged, run `git status` and look at the "Changes to be committed:" section.


If your file has already been added (staged) for commit, you unstage the file first: 

```
git reset HEAD [file name]
```

Once you run git reset, it will put the file back into an unstaged status.

If you want to remove any changes that you have made to the file, follow the **unstaged file** section below.

**Unstaged File**

To check if a file has been changed but not staged for commit, run `git status` and look at the "Changes not staged for commit:" section.

```
git status
```

To remove any changes from the file run 

```
git checkout [file name]
``` 

If you run a `git status` again you will see that the file is not longer in a changed state.


### Committing Changes

Before committing the changes to the repository, it is suggested to run `git status` one more time to make sure that all of the changes that you are expecting to be made is actually what will be made.

Once you are happy with changes that will be made, you need to commit them to the repository by running:

```
git commit -m "Your commit message"
```

## Sending Changes to Github

Since Git is a distributed version control system, the committed changes are only stored locally until you push them to the remote repository which in this case will be Github.  When you push changes to Github, you are pushing them only to your forked repository and the MikeAdeO/WebForum_SMS repository will not be affected by your changes.

Before pushing your changes up to Github, you should sync the changes from the MikeAdeO/WebForum_SMS repository into your repository and re-test.  **Replace "####" in the branch name with your Github issue number.**

```
git checkout master
git fetch upstream
git merge upstream/master
git checkout issue-branch-####
git rebase master
```

The first time that you push the branch to Github you need to set the upstream so that Git knows how to submit any changes that you make later to the branch. **Replace "####" in the branch name with your Github issue number.**

```
git push --set-upstream origin issue-branch-#### 
```

If you need to later on make changes to the branch and have not done a rebase and are on the branch, run

```
git push
``` 

After your initial push, if made changes and did a rebase again, you need to run the following command.  **Replace "####" in the branch name with your Github issue number.**

```
git push origin issue-branch-#### -f
```

## Creating a Pull Request

Once you are done fixing the Github issue that you are working on and are ready to submit your changes, you need to create a Pull Request on the Github website.  Unfortunately there is no command line option to create a pull request.

To create your pull request, navigate to your WebForum_SMS repository on the Github website.  When you are on the WebForum_SMS repository and viewing your issue branch, you will see a "Compare & pull request" button displayed.  Click on this button to start your pull request. 

> **Note:** If for some reason that button is not visible, click the Pull Request link on your branch.

On the Pull Request page, you can scroll down to review the changes you are submitting. 

Be descriptive in the subject and description for your pull request. Provide information on the changes you made so the project owners know exactly what you were trying to accomplish. 

If there is an issue(s) you are addressing with this pull request make sure you reference it by number (e.g. #1234) in the description of your pull request.  If the Pull Request fixes the Github issue, make sure to add the following text to the description to close the issue when the Pull Request is merged.  Make sure to replace 1234 with your Github issue number:

```
Closes #1234
```

Click the Preview tab to make sure that the description looks correct and that the links to the issues are correct.  If everything looks good, click the Create Pull Request button.

Your pull request has now been created and is ready for the project owners to review (and hopefully accept).

If all goes as planned, your pull request will be accepted. Of course, things don’t always go as planned. Let’s explore how to handle having to make changes to your Pull Request.

## Making changes to an existing pull request

Often, the project owners will make comments on your pull request and ask you to make some changes. Don’t feel bad if this happens, it happens especially with large pull request.  When this happens, don’t close the pull request. Simply make your changes locally, commit them to your local branch, then push those changes to GitHub.  Github will automatically pick up any changes that are pushed to your issue branch on Github and add them into the Pull Request. 


## Thank you

Thank you for contributing to this project.  Keep the contributions coming. 
