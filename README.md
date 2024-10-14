## Structure

The code in this example uses several folders and files that you will need to review:

- `functions.php`: Enqueues the JS and CSS files for the editor and front end.
- `package.json`: Sets up the command line scripts and defines development dependencies.
- `public`: The build folder where JS and CSS files are placed after being built/processed.
- `resources`

  - `js`
    - `editor.js`: Custom JS that runs on editor's page only.
    - `screen.js`: File for adding editor JS.
  - `scss`
    - `editor.scss`: File for adding editor UI CSS.
    - `screen.scss`: File for adding front-end CSS.

## Development

- `npm install`: Install node modules.
- `npm run start`: Watch and build process for development.
- `npm run build`: Builds files for production.
