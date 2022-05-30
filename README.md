<h1> Pechhulp zuid nederland origineel </h1>

<p>Maak laravel applicatie aan, door dit in cmd in te vullen. IN DE JUISTE MAP! En aan te passen met eigen projectnaam</p>
<code> composer create-project laravel/laravel projectnaam </code>

<h2> LARAVEL PACKAGES </h2>

composer
https://getcomposer.org/

nodejs
https://nodejs.org/en/

<h2> BOOTSTRAP CDN </h2>


<p>CSS kopieeren in de HEAD en JS eind body</p>
BOOTSTRAP CSS & JS: https://getbootstrap.com/docs/5.2/getting-started/introduction/#cdn-links


<h2> LARAVEL UI LOGIN COMMANDS (als nodig)</h2>

- composer require laravel/ui
- php artisan ui vue --auth
- php artisan ui bootstrap
- npm install
- npm run dev

<h2> CODE SNIPPETS </h2>
<code> 
$wedstrijden = new Wedstrijd;

        $wedstrijden->gewonnenTeam = $request->input('gewonnenTeam');

        $wedstrijden->verlorenTeam = $request->input('verlorenTeam');

        $wedstrijden->scoreGewonnenTeam = $request->input('scoreGewonnenTeam');

        $wedstrijden->scoreVerlorenTeam = $request->input('scoreVerlorenTeam');

        $wedstrijden->save();




        $gewonnenTeam = $request->input('gewonnenTeam');

        Team::where('id', $gewonnenTeam)->update(['ronde' => Team::raw('ronde + 1')]);



        $verlorenTeam = $request->input('verlorenTeam');

        Team::where('id', $verlorenTeam)->update(['ronde' => Team::raw('ronde = 0')]);
</code>

<h2> VSCODE PLUGINS </h2>

- laravel snippets
- emmet

