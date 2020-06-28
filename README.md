# WebForum_SMS
This is a school Management System


# Developers guide.

This process here should be able to guide you on how to contribute effectively to this project, follow the steps below. You should not be new to the git workflow process however if you still are, the guide should still be able to help you through the process.

### Development is the default branch.

#### NB: All occurences of AbisoyeAlli will be your own github username

* Fork the repository to generate a copy of your own.

* Clone the repository.

   ```
    git clone https://github.com/AbisoyeAlli/WebForum_SMS.git
   ```
    
* Make the original MikeAdeO/WebForum_SMS repo the remote upstream (at upstream)
    ```
    git remote add upstream https://github.com/MikeAdeO/WebForum_SMS.git
    ```
* Create a branch FROM development, ALWAYS CREATE YOUR BRANCH FROM DEVELOPMENT, the branch name should at least be meaningful and relating to what you are working on. 

    ```
    git checkout -b (name-of-branch)
    ```

* After changes have been made, **RUN**:
    ```
    git pull upstream development
    ```
Consistently pull from the development branch to avoid not getting your pull request merged and to avoid conflicts.
This way you can resolve conflicts from your local computer even before pushing always check what branch you are on when making changes
 
* Make your changes, add them and make your commits

   ```
   git add .

   git commit -m "your message"
   ```
Write good commit messages, this is very important, so people reviewing can know what your fix or feature is doing

* Push your codes to the new branch on your forked remote upstream repository

    ```
    git push origin (name-of-branch)
   ```

Make your Pull request from that branch of your repo to the development branch of MikeAdeO/WebForum_SMS repo and wait for it to be merged.

Your PR should carry the task URL.
if you are going to make changes to an existing code, state why you are doing so in the commit messages

it is not just about the code, user workflow matters too!!

## Commit Structure

* type: subject e.g body, footer

The title consists of the type of the message and subject.
The type is contained within the title and can be one of these types:

* feat: a new feature

* fix: a bug fix

* docs: changes to documentation

* style: formatting, missing semi colons, etc; no code change

* refactor: refactoring production code

* test: adding tests, refactoring test; no production code change

* chore: updating build tasks, package manager configs, etc; no production code change

**An example of a good commit message**
    
    feat: Make login check for email and password

More detailed explanatory text, if necessary. Wrap it to about 72 characters or so. In some contexts, the first line is treated as the subject of the commit and the rest of the text as the body. The blank line separating the summary from the body is critical (unless you omit the body entirely); various tools like `log, shortlog and rebase` can get confused if you run the two together.
Explain the problem that this commit is solving. Focus on why you are making this change as opposed to how (the code explains that).
Are there side effects or other unintuitive consequenses of this change? Here's the place to explain them.

* Further paragraphs come after blank lines.
 - Bullet points are okay, too
 - Typically a hyphen or asterisk is used for the bullet, preceded
   by a single space, with blank lines in between, but conventions
   vary here
* If you use an issue tracker, put references to them at the bottom, like this:
Resolves: #123
See also: #456, #789
And if your commit is just a simple thing, then make the message very short, but not just a title

### Happy hacking!!!!

