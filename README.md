# Spark Design System Tests

This is an application that consumes Spark Design System for the purposes of testing.

## Getting Started

1. You'll need to have Docker installed

   https://www.docker.com/

2. Install dependencies

   ```
   npm install
   ```

3. Add the host name to your hosts file

   ```
   127.0.0.1 sparkdesignsystemtests
   ```

4. Then run

   ```
   docker-compose up -d
   npm start
   ```

### What does npm start do exactly?

> Running **npm start** will run the initial sass transpile with node-sass, then in parallel, it will
> run a watch on the spark directory (in node_modules, i'd recommend symlinking it for easier dev time)
> and browser-sync (in proxy mode, looking at sparkdesignsystemtests:4000) watching public/

> Browser-sync should open up the site for you, but if it doesnt, hit http://localhost:3000

### How do I add a new pattern section?

1. Add a new .twig file in the templates directory (name it after the pattern)
2. Hit the route with the same name as the template file. (https://localhost:3000/buttons, for the buttons template, for example)