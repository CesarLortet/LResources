<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="referrer" content="no-referrer">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/icons/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.min.css">
    <link rel="stylesheet" href="my-theme.css">
    <title>Resources</title>
</head>

<body class="layout-sidebar">
    <aside class="sidebar__sidebar shadow-2 bg-3">
        <div class="flex fx-center align-center">
            <img class="sidebar-logo cursor-pointer" onclick="toggleTheme()" src="images/icons/favicon.ico" alt="" height="50" width="50" /> 
        </div>

        <div>
            <a href="#gettingStarted" class="bg-3 hoverable-1">Getting started</a>
                <a href="#startingUse" class="bg-2 hoverable-1">Starting use</a>
                <a href="#template" class="bg-2 hoverable-1">Template</a>
            <a href="#themes" class="bg-3 hoverable-1">Themes</a>
            <a href="#general" class="bg-3 hoverable-1">General</a>
                <a href="#colors" class="bg-2 hoverable-1">Colors</a>
                    <a href="#bgcolors" class="bg-1 hoverable-1">Background colors</a>
                    <a href="#txtcolors" class="bg-1 hoverable-1">Text colors</a>
                <a href="#wrapper" class="bg-2 hoverable-1">Wrapper</a>
                    <a href="#basicwrapper" class="bg-1 hoverable-1">Basic wrapper</a>
                    <a href="#responsivewrapper" class="bg-1 hoverable-1">Responsive wrapper</a>
            <a href="#icons" class="bg-3 hoverable-1">Icons</a>
            <a href="#forms" class="bg-3 hoverable-1">Forms</a>
                <a href="#simple-inputs" class="bg-2 hoverable-1">Simple inputs</a>
                <a href="#select" class="bg-2 hoverable-1">Select</a>
                <a href="#textarea" class="bg-2 hoverable-1">Text Area</a>
                <a href="#advanced-inputs" class="bg-2 hoverable-1">Advanced inputs</a>
            <a href="#components" class="bg-3 hoverable-1">Components</a>
                <a href="#alerts" class="bg-2 hoverable-1">Alerts</a>
                    <a href="#basicalerts" class="bg-1 hoverable-1">Basic alerts</a>
                    <a href="#borderedalerts" class="bg-1 hoverable-1">Bordered alerts</a>
                <a href="#block-code" class="bg-2 hoverable-1">Block code</a>
                <a href="#buttons" class="bg-2 hoverable-1">Buttons</a>
                    <a href="#buttongroup" class="bg-1 hoverable-1">Button group</a>
                    <a href="#normalbuttons" class="bg-1 hoverable-1">Normal buttons</a>
                    <a href="#circlebuttons" class="bg-1 hoverable-1">Circle buttons</a>
                    <a href="#pressbuttons" class="bg-1 hoverable-1">Press buttons</a>
                <a href="#roundedbuttons" class="bg-1 hoverable-1">Rounded buttons</a>
                    <a href="#activeclass" class="bg-1 hoverable-1">Active class</a>
                    <a href="#disabledclass" class="bg-1 hoverable-1">Disabled class</a>
                <a href="#cards" class="bg-2 hoverable-1">Cards</a>
                <a href="#breadcrumb" class="bg-2 hoverable-1">Breadcrumb</a>
                <a href="#collapsible" class="bg-2 hoverable-1">Collapsible</a>
                <a href="#table" class="bg-2 hoverable-1">Table</a>
            <a href="#decorations" class="bg-3 hoverable-1">Decorations</a>
                <a href="#texts" class="bg-2 hoverable-1">Texts</a>
                <a href="#round" class="bg-2 hoverable-1">Round</a>
                <a href="#hoverable" class="bg-2 hoverable-1">Hoverable</a>
                <a href="#shadows" class="bg-2 hoverable-1">Shadows</a>
                <a href="#txt-shadows" class="bg-2 hoverable-1">Text Shadows</a>
                <a href="#morph" class="bg-2 hoverable-1">Neumorphic</a>
                <a href="#borders" class="bg-2 hoverable-1">Borders</a>
                    <a href="#simpleborder" class="bg-1 hoverable-1">Simple Border</a>
                    <a href="#bordercolors" class="bg-1 hoverable-1">Borders colors</a>
                <a href="#underlines" class="bg-2 hoverable-1">Underlines</a>
                    <a href="#underlinescolors" class="bg-1 hoverable-1">Underlines colors</a>
                <a href="#cursors" class="bg-2 hoverable-1">Cursors</a>
        </div>
    </aside>
    <main class="content bg-1 sidebar__main">
        <div class="breadcrumb bg-2 p-2">
            <!-- Breadcrumb item -->
            <div class="breadcrumb__item">Getting started</div>
            <div class="breadcrumb__item"><a href="#components">Components</a></div>
            <div class="breadcrumb__item"><a href="#breadcrumb">Breadcrumb</a></div>
        </div>
        <div class="container">
            <h1 class="center">Resources</h1>
            <section id="gettingStarted">
                <header>
                    <h2 class="center">Getting started</h2>
                </header>
                <main>
                    <section id="startingUse">
                        <h3 class="underline u-ruby">Starting use</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;!--- Import in your websites--->
        &lt;!--- Resources CSS --->
        &lt;link rel="stylesheet" href="https://res.lortetcesar.fr/style.min.css">
        &lt;!--- Resources JS --->
        &lt;script src="https://res.lortetcesar.fr/script.min.js">&lt;/script></code></pre>
                    </section>
                    <section id="template">
                        <h3 class="underline u-ruby">Template</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">&lt;!DOCTYPE html>
&lt;html lang="en">

&lt;head>
    &lt;meta charset="UTF-8">
    &lt;meta name="referrer" content="no-referrer">
    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
    &lt;link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    &lt;link rel="stylesheet" href="http://res.lortetcesar.fr/style.min.css">
    &lt;title>Getting started - Resources&lt;/title>
&lt;/head>

&lt;body class="bg-1 layout-sidebar">
    &lt;div class="sidebar__sidebar bg-3">
        &lt;h3 class="sidebar-logo m-5"> Mon wonderfull website&lt;/h3>
        &lt;div>
            &lt;a class="bg-2 border b-black m-2" href="#">Link 1&lt;/a>
            &lt;a class="bg-2 border b-black m-2" href="#">Link 2&lt;/a>
            &lt;a class="bg-2 border b-black m-2" href="#">Link 3&lt;/a>
        &lt;/div>
    &lt;/div>
    &lt;main class="content sidebar__main layout__spa v-center">
        &lt;div class="centering">
            Your content here
        &lt;/div>
    &lt;/main>
&lt;/body>
&lt;/html>
&lt;script src="http://res.lortetcesar.fr/script.min.js">&lt;/script>
</code></pre>

                        <a href="/test.html"  class="centering p-3 border b-grey w-100 bg-2 hoverable-2 cursor-pointer">Show demo</a>
                    </section>
                </main>
            </section>
            <section id="themes">
                <header>
                    <h2 class="center">Themes</h2>
                </header>
                <body>
                    <h3 class="underline u-ruby">Theme vars</h3>
                    <pre class="morph-pressed rounded-2 bg-2"><code class="language-css">        /* my-theme.css */
        .my-wonderfull-theme {
            --color-background-strong: #1B2036;
            --color-background-medium: #232946;
            --color-background-small: #37406D;

            --color-border: #b8c1ec;

            --color-title-strong: #b8c1ec;
            --color-title-medium: #fffffe;
            --color-title-small: #eebbc3;

            --color-alert-error: #e53170;
            --color-alert-success: #2cb67d;
            --color-alert-warning: #ff8906;

            --color-button-background: #eebbc3;
            --color-button-background-alt: #b8c1ec;
            --color-button-text: #232946;

            --color-link: #b8c1ec;
            --color-link-hover: #232946;
            --color-link-visited: #fffffe;
            --color-link-active: #232946;

            --color-font: #fffffe;
            --color-font-light: #fff;
            --color-font-dark: #000;

            --color-shadow: rgba(255, 255, 255, 0.2);
    }</code></pre>
                    <section>
                        <h4>Change theme</h4>
                        <h5>Switch between light and dark mode</h5>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">         &lt;button class="btn btn-validation" onclick="toggleTheme()">Change theme&lt;/button></code></pre>
                        <h5>Set custom theme</h5>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-javascript">        //Javascript
        setTheme("my-wonderfull-theme")
                        </code></pre>
                    </section>
                    <section>
                        <h4>Exemple</h4>
                        <button class="btn btn-validation" onclick="toggleTheme()">Change theme</button>
                        <button class="btn btn-validation rainbow txt-black" onclick="setTheme('my-wonderfull-theme')">Set my wonderfull theme</button>
                    </section>
                </body>
            </section>
            <section id="layout">
                <header>
                    <h2 class="center">Layouts</h2>
                </header>
                <main>
                    <section id="wrapper">
                        <header>
                            <h3 class="underline u-ruby">Wrapper</h3>
                        </header>
                        <main>
                            <section id="basicwrapper">
                                <h4>Basic wrapper</h4>
                                    <div class="rounded-2 p-2 bg-2">
                                        <div class="wrapper xs4 txt-center">
                                            <div class="m-1 p-2 grey">box 1</div>
                                            <div class="m-1 p-2 grey">box 2</div>
                                            <div class="m-1 p-2 grey">box 3</div>
                                            <div class="m-1 p-2 grey">box 4</div>
                                            <div class="m-1 p-2 grey">box 5</div>
                                        </div>
                                    </div>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="wrapper xs4">
                    &lt;div>box 1&lt;/div>
                    &lt;div>box 2&lt;/div>
                    &lt;div>box 3&lt;/div>
                    &lt;div>box 4&lt;/div>
                    &lt;div>box 5&lt;/div>
                &lt;/div></code></pre>
                            </section>
                            <section id="responsivewrapper">
                                <h4>Responsive</h4>
                                    <div class="rounded-2 p-2 bg-2">
                                        <div class="wrapper xs2 md3 lg4 txt-center">
                                            <div class="m-1 p-2 grey">box 1</div>
                                            <div class="m-1 p-2 grey">box 2</div>
                                            <div class="m-1 p-2 grey">box 3</div>
                                            <div class="m-1 p-2 grey">box 4</div>
                                            <div class="m-1 p-2 grey">box 5</div>
                                        </div>
                                    </div>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="wrapper xs2 md3 lg4">
                    &lt;div>box 1&lt;/div>
                    &lt;div>box 2&lt;/div>
                    &lt;div>box 3&lt;/div>
                    &lt;div>box 4&lt;/div>
                    &lt;div>box 5&lt;/div>
                &lt;/div></code></pre>
                            </section>
                        </main>
                    </section>
                    <section>
                        <header>
                            <h3 class="underline u-ruby">Split screen</h2>
                        </header>
                        <main>
                            <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">      &lt;div class="split-screen">
            &lt;div class="split-screen__half">Half&lt;/div>
            &lt;div class="split-screen__half">Half&lt;/div>
        &lt;/div></code></pre>
                            <div class="m-1 p-5 rounded-3 bg-2">
                                <div class="split-screen" style="height: 200px">
                                    <div class="split-screen__half grey v-center">
                                        <div class="centering">Half</div>
                                    </div>
                                    <div class="split-screen__half grey dark-2 v-center">
                                        <div class="centering">Half</div>
                                    </div>
                                </div>
                            </div>
                        </main>
                    </section>
                    <section>
                        <header>
                            <h3 class="underline u-ruby">Sidebar</h2>
                        </header>
                        <main>
                            <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="sidebar">
            &lt;aside class="sidebar__sidebar">Sidebar&lt;/aside>
            &lt;main class="sidebar__main">Content&lt;/main>
        &lt;/div></code></pre>
                            <div class="m-1 p-5 rounded-3 bg-2">
                                <div class="sidebar">
                                    <aside class="sidebar__sidebar grey  v-center" style="position: absolute; width:150px; height: 200px;">
                                        <div class="centering">Sidebar</div>
                                    </aside>
                                    <main class="sidebar__main grey dark-2 v-center" style="height: 200px; margin-left:150px; ">
                                        <div class="centering">Content</div>
                                    </main>
                                </div>
                            </div>
                        </main>
                    </section>
                    <section>
                        <header>
                            <h3 class="underline u-ruby">Sticky footer</h2>
                        </header>
                        <main>
                            <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="sticky-footer">
            &lt;header class="sticky-footer__header">...&lt;/header>
            &lt;main class="sticky-footer__main">...&lt;/main>
            &lt;footer class="sticky-footer__footer">...&lt;/footer>
        &lt;/div></code></pre>
                            <div class="m-1 p-5 rounded-3 bg-2" style="height: 200px">
                                <div class="sticky-footer">
                                    <header class="sticky-footer__header grey dark-2">Header</header>
                                    <main class="sticky-footer__main grey v-center"><div class="centering">Content</div></main>
                                    <footer class="sticky-footer__footer grey dark-2">Footer</footer>
                                </div>
                            </div>
                            <div class="m-1 p-5 rounded-3 bg-2" style="height: 200px">
                                <header class="sticky-header__header grey dark-2">Sticky Header Variant</header>
                                <main class="grey v-center h-90"><div class="centering">You may use .sticky-header__header class</div></main>
                            </div>
                        </main>
                    </section>
            </section>
            <section id="general">
                <header>
                    <h2 class="center">General</h2>
                </header>
                <main>
                    <section id="colors">
                        <header>
                            <h3 class="underline u-ruby">Colors</h3>
                        </header>
                        <main>
                            <section id="bgcolors">
                                <h4>Background colors</h4>
                                <div class="wrapper lg3 md2 xs1">
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 blue dark-5">blue dark-5</div>
                                        <div class="p-3 blue dark-4">blue dark-4</div>
                                        <div class="p-3 blue dark-3">blue dark-3</div>
                                        <div class="p-3 blue dark-2">blue dark-2</div>
                                        <div class="p-3 blue dark-1">blue dark-1</div>
                                        <div class="p-3 blue">blue</div>
                                        <div class="p-3 blue light-1">blue light-1</div>
                                        <div class="p-3 blue light-2">blue light-2</div>
                                        <div class="p-3 blue light-3">blue light-3</div>
                                        <div class="p-3 blue light-4">blue light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 red dark-5">red dark-5</div>
                                        <div class="p-3 red dark-4">red dark-4</div>
                                        <div class="p-3 red dark-3">red dark-3</div>
                                        <div class="p-3 red dark-2">red dark-2</div>
                                        <div class="p-3 red dark-1">red dark-1</div>
                                        <div class="p-3 red">red</div>
                                        <div class="p-3 red light-1">red light-1</div>
                                        <div class="p-3 red light-2">red light-2</div>
                                        <div class="p-3 red light-3">red light-3</div>
                                        <div class="p-3 red light-4">red light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 green dark-5">green dark-5</div>
                                        <div class="p-3 green dark-4">green dark-4</div>
                                        <div class="p-3 green dark-3">green dark-3</div>
                                        <div class="p-3 green dark-2">green dark-2</div>
                                        <div class="p-3 green dark-1">green dark-1</div>
                                        <div class="p-3 green">green</div>
                                        <div class="p-3 green light-1">green light-1</div>
                                        <div class="p-3 green light-2">green light-2</div>
                                        <div class="p-3 green light-3">green light-3</div>
                                        <div class="p-3 green light-4">green light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 lapis dark-5">lapis dark-5</div>
                                        <div class="p-3 lapis dark-4">lapis dark-4</div>
                                        <div class="p-3 lapis dark-3">lapis dark-3</div>
                                        <div class="p-3 lapis dark-2">lapis dark-2</div>
                                        <div class="p-3 lapis dark-1">lapis dark-1</div>
                                        <div class="p-3 lapis">lapis</div>
                                        <div class="p-3 lapis light-1">lapis light-1</div>
                                        <div class="p-3 lapis light-2">lapis light-2</div>
                                        <div class="p-3 lapis light-3">lapis light-3</div>
                                        <div class="p-3 lapis light-4">lapis light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 ruby dark-5">ruby dark-5</div>
                                        <div class="p-3 ruby dark-4">ruby dark-4</div>
                                        <div class="p-3 ruby dark-3">ruby dark-3</div>
                                        <div class="p-3 ruby dark-2">ruby dark-2</div>
                                        <div class="p-3 ruby dark-1">ruby dark-1</div>
                                        <div class="p-3 ruby">ruby</div>
                                        <div class="p-3 ruby light-1">ruby light-1</div>
                                        <div class="p-3 ruby light-2">ruby light-2</div>
                                        <div class="p-3 ruby light-3">ruby light-3</div>
                                        <div class="p-3 ruby light-4">ruby light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 jade dark-5">jade dark-5</div>
                                        <div class="p-3 jade dark-4">jade dark-4</div>
                                        <div class="p-3 jade dark-3">jade dark-3</div>
                                        <div class="p-3 jade dark-2">jade dark-2</div>
                                        <div class="p-3 jade dark-1">jade dark-1</div>
                                        <div class="p-3 jade">jade</div>
                                        <div class="p-3 jade light-1">jade light-1</div>
                                        <div class="p-3 jade light-2">jade light-2</div>
                                        <div class="p-3 jade light-3">jade light-3</div>
                                        <div class="p-3 jade light-4">jade light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 sapphire dark-5">sapphire dark-5</div>
                                        <div class="p-3 sapphire dark-4">sapphire dark-4</div>
                                        <div class="p-3 sapphire dark-3">sapphire dark-3</div>
                                        <div class="p-3 sapphire dark-2">sapphire dark-2</div>
                                        <div class="p-3 sapphire dark-1">sapphire dark-1</div>
                                        <div class="p-3 sapphire">sapphire</div>
                                        <div class="p-3 sapphire light-1">sapphire light-1</div>
                                        <div class="p-3 sapphire light-2">sapphire light-2</div>
                                        <div class="p-3 sapphire light-3">sapphire light-3</div>
                                        <div class="p-3 sapphire light-4">sapphire light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 perl dark-5">perl dark-5</div>
                                        <div class="p-3 perl dark-4">perl dark-4</div>
                                        <div class="p-3 perl dark-3">perl dark-3</div>
                                        <div class="p-3 perl dark-2">perl dark-2</div>
                                        <div class="p-3 perl dark-1">perl dark-1</div>
                                        <div class="p-3 perl">perl</div>
                                        <div class="p-3 perl light-1">perl light-1</div>
                                        <div class="p-3 perl light-2">perl light-2</div>
                                        <div class="p-3 perl light-3">perl light-3</div>
                                        <div class="p-3 perl light-4">perl light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 emerald dark-5">emerald dark-5</div>
                                        <div class="p-3 emerald dark-4">emerald dark-4</div>
                                        <div class="p-3 emerald dark-3">emerald dark-3</div>
                                        <div class="p-3 emerald dark-2">emerald dark-2</div>
                                        <div class="p-3 emerald dark-1">emerald dark-1</div>
                                        <div class="p-3 emerald">emerald</div>
                                        <div class="p-3 emerald light-1">emerald light-1</div>
                                        <div class="p-3 emerald light-2">emerald light-2</div>
                                        <div class="p-3 emerald light-3">emerald light-3</div>
                                        <div class="p-3 emerald light-4">emerald light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 amber dark-5">amber dark-5</div>
                                        <div class="p-3 amber dark-4">amber dark-4</div>
                                        <div class="p-3 amber dark-3">amber dark-3</div>
                                        <div class="p-3 amber dark-2">amber dark-2</div>
                                        <div class="p-3 amber dark-1">amber dark-1</div>
                                        <div class="p-3 amber">amber</div>
                                        <div class="p-3 amber light-1">amber light-1</div>
                                        <div class="p-3 amber light-2">amber light-2</div>
                                        <div class="p-3 amber light-3">amber light-3</div>
                                        <div class="p-3 amber light-4">amber light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 clay dark-5">clay dark-5</div>
                                        <div class="p-3 clay dark-4">clay dark-4</div>
                                        <div class="p-3 clay dark-3">clay dark-3</div>
                                        <div class="p-3 clay dark-2">clay dark-2</div>
                                        <div class="p-3 clay dark-1">clay dark-1</div>
                                        <div class="p-3 clay">clay</div>
                                        <div class="p-3 clay light-1">clay light-1</div>
                                        <div class="p-3 clay light-2">clay light-2</div>
                                        <div class="p-3 clay light-3">clay light-3</div>
                                        <div class="p-3 clay light-4">clay light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey dark-5">grey dark-5</div>
                                        <div class="p-3 grey dark-4">grey dark-4</div>
                                        <div class="p-3 grey dark-3">grey dark-3</div>
                                        <div class="p-3 grey dark-2">grey dark-2</div>
                                        <div class="p-3 grey dark-1">grey dark-1</div>
                                        <div class="p-3 grey">grey</div>
                                        <div class="p-3 grey light-1">grey light-1</div>
                                        <div class="p-3 grey light-2">grey light-2</div>
                                        <div class="p-3 grey light-3">grey light-3</div>
                                        <div class="p-3 grey light-4">grey light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 topaze dark-5">topaze dark-5</div>
                                        <div class="p-3 topaze dark-4">topaze dark-4</div>
                                        <div class="p-3 topaze dark-3">topaze dark-3</div>
                                        <div class="p-3 topaze dark-2">topaze dark-2</div>
                                        <div class="p-3 topaze dark-1">topaze dark-1</div>
                                        <div class="p-3 topaze">topaze</div>
                                        <div class="p-3 topaze light-1">topaze light-1</div>
                                        <div class="p-3 topaze light-2">topaze light-2</div>
                                        <div class="p-3 topaze light-3">topaze light-3</div>
                                        <div class="p-3 topaze light-4">topaze light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="flex flex-center align-center p-5 mb-2 error">error</div>
                                        <div class="flex flex-center align-center p-5 mb-2 warning">warning</div>
                                        <div class="flex flex-center align-center p-5 mb-2 success">success</div>
                                        <div class="flex flex-center align-center p-5 mb-2 primary">primary</div>
                                        <div class="flex flex-center align-center p-5 mb-2 secondary">secondary</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="flex flex-center align-center p-5 mb-2 black">black</div>
                                        <div class="flex flex-center align-center p-5 mb-2 white">white</div>
                                        <div class="flex flex-center align-center p-5 mb-2 transparent">transparent</div>
                                    </div>
                                </div>
                            </section>
                            <section id="txtcolors">
                                <h4>Text colors</h4>
                                <div class="wrapper lg3 md2 xs1">
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-blue txt-dark-5">txt-blue txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-blue txt-dark-4">txt-blue txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-blue txt-dark-3">txt-blue txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-blue txt-dark-2">txt-blue txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-blue txt-dark-1">txt-blue txt-dark-1</div>
                                        <div class="p-3 black txt-blue">txt-blue</div>
                                        <div class="p-3 black txt-blue txt-light-1">txt-blue txt-light-1</div>
                                        <div class="p-3 black txt-blue txt-light-2">txt-blue txt-light-2</div>
                                        <div class="p-3 black txt-blue txt-light-3">txt-blue txt-light-3</div>
                                        <div class="p-3 black txt-blue txt-light-4">txt-blue txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-red txt-dark-5">txt-red txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-red txt-dark-4">txt-red txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-red txt-dark-3">txt-red txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-red txt-dark-2">txt-red txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-red txt-dark-1">txt-red txt-dark-1</div>
                                        <div class="p-3 black txt-red">txt-red</div>
                                        <div class="p-3 black txt-red txt-light-1">txt-red txt-light-1</div>
                                        <div class="p-3 black txt-red txt-light-2">txt-red txt-light-2</div>
                                        <div class="p-3 black txt-red txt-light-3">txt-red txt-light-3</div>
                                        <div class="p-3 black txt-red txt-light-4">txt-red txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-green txt-dark-5">txt-green txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-green txt-dark-4">txt-green txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-green txt-dark-3">txt-green txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-green txt-dark-2">txt-green txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-green txt-dark-1">txt-green txt-dark-1</div>
                                        <div class="p-3 black txt-green">txt-green</div>
                                        <div class="p-3 black txt-green txt-light-1">txt-green txt-light-1</div>
                                        <div class="p-3 black txt-green txt-light-2">txt-green txt-light-2</div>
                                        <div class="p-3 black txt-green txt-light-3">txt-green txt-light-3</div>
                                        <div class="p-3 black txt-green txt-light-4">txt-green txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-lapis txt-dark-5">txt-lapis txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-lapis txt-dark-4">txt-lapis txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-lapis txt-dark-3">txt-lapis txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-lapis txt-dark-2">txt-lapis txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-lapis txt-dark-1">txt-lapis txt-dark-1</div>
                                        <div class="p-3 black txt-lapis">txt-lapis</div>
                                        <div class="p-3 black txt-lapis txt-light-1">txt-lapis txt-light-1</div>
                                        <div class="p-3 black txt-lapis txt-light-2">txt-lapis txt-light-2</div>
                                        <div class="p-3 black txt-lapis txt-light-3">txt-lapis txt-light-3</div>
                                        <div class="p-3 black txt-lapis txt-light-4">txt-lapis txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-ruby txt-dark-5">txt-ruby txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-ruby txt-dark-4">txt-ruby txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-ruby txt-dark-3">txt-ruby txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-ruby txt-dark-2">txt-ruby txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-ruby txt-dark-1">txt-ruby txt-dark-1</div>
                                        <div class="p-3 black txt-ruby">txt-ruby</div>
                                        <div class="p-3 black txt-ruby txt-light-1">txt-ruby txt-light-1</div>
                                        <div class="p-3 black txt-ruby txt-light-2">txt-ruby txt-light-2</div>
                                        <div class="p-3 black txt-ruby txt-light-3">txt-ruby txt-light-3</div>
                                        <div class="p-3 black txt-ruby txt-light-4">txt-ruby txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-jade txt-dark-5">txt-jade txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-jade txt-dark-4">txt-jade txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-jade txt-dark-3">txt-jade txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-jade txt-dark-2">txt-jade txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-jade txt-dark-1">txt-jade txt-dark-1</div>
                                        <div class="p-3 black txt-jade">txt-jade</div>
                                        <div class="p-3 black txt-jade txt-light-1">txt-jade txt-light-1</div>
                                        <div class="p-3 black txt-jade txt-light-2">txt-jade txt-light-2</div>
                                        <div class="p-3 black txt-jade txt-light-3">txt-jade txt-light-3</div>
                                        <div class="p-3 black txt-jade txt-light-4">txt-jade txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-sapphire txt-dark-5">txt-sapphire dark-5</div>
                                        <div class="p-3 grey light-4 txt-sapphire txt-dark-4">txt-sapphire dark-4</div>
                                        <div class="p-3 grey light-3 txt-sapphire txt-dark-3">txt-sapphire dark-3</div>
                                        <div class="p-3 grey light-3 txt-sapphire txt-dark-2">txt-sapphire dark-2</div>
                                        <div class="p-3 grey light-3 txt-sapphire txt-dark-1">txt-sapphire dark-1</div>
                                        <div class="p-3 black txt-sapphire">txt-sapphire</div>
                                        <div class="p-3 black txt-sapphire txt-light-1">txt-sapphire light-1</div>
                                        <div class="p-3 black txt-sapphire txt-light-2">txt-sapphire light-2</div>
                                        <div class="p-3 black txt-sapphire txt-light-3">txt-sapphire light-3</div>
                                        <div class="p-3 black txt-sapphire txt-light-4">txt-sapphire light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-perl txt-dark-5">txt-perl txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-perl txt-dark-4">txt-perl txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-perl txt-dark-3">txt-perl txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-perl txt-dark-2">txt-perl txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-perl txt-dark-1">txt-perl txt-dark-1</div>
                                        <div class="p-3 black txt-perl">txt-perl</div>
                                        <div class="p-3 black txt-perl txt-light-1">txt-perl txt-light-1</div>
                                        <div class="p-3 black txt-perl txt-light-2">txt-perl txt-light-2</div>
                                        <div class="p-3 black txt-perl txt-light-3">txt-perl txt-light-3</div>
                                        <div class="p-3 black txt-perl txt-light-4">txt-perl txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-emerald txt-dark-5">txt-emerald txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-emerald txt-dark-4">txt-emerald txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-emerald txt-dark-3">txt-emerald txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-emerald txt-dark-2">txt-emerald txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-emerald txt-dark-1">txt-emerald txt-dark-1</div>
                                        <div class="p-3 black txt-emerald">txt-emerald</div>
                                        <div class="p-3 black txt-emerald txt-light-1">txt-emerald txt-light-1</div>
                                        <div class="p-3 black txt-emerald txt-light-2">txt-emerald txt-light-2</div>
                                        <div class="p-3 black txt-emerald txt-light-3">txt-emerald txt-light-3</div>
                                        <div class="p-3 black txt-emerald txt-light-4">txt-emerald txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-amber txt-dark-5">txt-amber txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-amber txt-dark-4">txt-amber txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-amber txt-dark-3">txt-amber txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-amber txt-dark-2">txt-amber txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-amber txt-dark-1">txt-amber txt-dark-1</div>
                                        <div class="p-3 black txt-amber">txt-amber</div>
                                        <div class="p-3 black txt-amber txt-light-1">txt-amber txt-light-1</div>
                                        <div class="p-3 black txt-amber txt-light-2">txt-amber txt-light-2</div>
                                        <div class="p-3 black txt-amber txt-light-3">txt-amber txt-light-3</div>
                                        <div class="p-3 black txt-amber txt-light-4">txt-amber txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-clay txt-dark-5">txt-clay txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-clay txt-dark-4">txt-clay txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-clay txt-dark-3">txt-clay txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-clay txt-dark-2">txt-clay txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-clay txt-dark-1">txt-clay txt-dark-1</div>
                                        <div class="p-3 black txt-clay">txt-clay</div>
                                        <div class="p-3 black txt-clay txt-light-1">txt-clay txt-light-1</div>
                                        <div class="p-3 black txt-clay txt-light-2">txt-clay txt-light-2</div>
                                        <div class="p-3 black txt-clay txt-light-3">txt-clay txt-light-3</div>
                                        <div class="p-3 black txt-clay txt-light-4">txt-clay txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-grey txt-dark-5">txt-grey txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-grey txt-dark-4">txt-grey txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-grey txt-dark-3">txt-grey txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-grey txt-dark-2">txt-grey txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-grey txt-dark-1">txt-grey txt-dark-1</div>
                                        <div class="p-3 black txt-grey">txt-grey</div>
                                        <div class="p-3 black txt-grey txt-light-1">txt-grey txt-light-1</div>
                                        <div class="p-3 black txt-grey txt-light-2">txt-grey txt-light-2</div>
                                        <div class="p-3 black txt-grey txt-light-3">txt-grey txt-light-3</div>
                                        <div class="p-3 black txt-grey txt-light-4">txt-grey txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 grey light-4 txt-topaze txt-dark-5">txt-topaze txt-dark-5</div>
                                        <div class="p-3 grey light-4 txt-topaze txt-dark-4">txt-topaze txt-dark-4</div>
                                        <div class="p-3 grey light-3 txt-topaze txt-dark-3">txt-topaze txt-dark-3</div>
                                        <div class="p-3 grey light-3 txt-topaze txt-dark-2">txt-topaze txt-dark-2</div>
                                        <div class="p-3 grey light-3 txt-topaze txt-dark-1">txt-topaze txt-dark-1</div>
                                        <div class="p-3 black txt-topaze">txt-topaze</div>
                                        <div class="p-3 black txt-topaze txt-light-1">txt-topaze txt-light-1</div>
                                        <div class="p-3 black txt-topaze txt-light-2">txt-topaze txt-light-2</div>
                                        <div class="p-3 black txt-topaze txt-light-3">txt-topaze txt-light-3</div>
                                        <div class="p-3 black txt-topaze txt-light-4">txt-topaze txt-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="flex flex-center align-center p-5 mb-2 txt-error black">txt-error</div>
                                        <div class="flex flex-center align-center p-5 mb-2 txt-warning black">txt-warning</div>
                                        <div class="flex flex-center align-center p-5 mb-2 txt-success black">txt-success</div>
                                        <div class="flex flex-center align-center p-5 mb-2 txt-primary black">txt-primary</div>
                                        <div class="flex flex-center align-center p-5 mb-2 txt-secondary black">txt-secondary</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="flex flex-center align-center p-5 mb-2 txt-black grey light-1">txt-black</div>
                                        <div class="flex flex-center align-center p-5 mb-2 black"</div>
                                    </div>
                                </div>
                            </section>
                        </main>
                    </section>
                </main>
            </section>
            
            <section id="icons">
                <header>
                    <h2 class="center">Icons</h2>
                </header>
                <main>
                    <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;img src="https://res.lortetcesar.fr/images/icons/56x.ico" alt="256x256"></code></pre>
                    <div class="container">
                        <div class="wrapper xs1 lg2">
                            <div class="txt-center">
                                <h3 class="underline u-ruby">Global Smart Rescue</h3>
                                <div class="wrapper xs1 md3 lg3">
                                    <div class="txt-center">
                                        <img width="256" src="images/icons/56x.ico" alt="256x256">
                                        <p>256x256</p>
                                        <p>56x.ico</p>
                                    </div>
                                    <div class="txt-center">
                                        <img width="128" src="images/icons/28x.ico" alt="128x128">
                                        <p>128x128</p>
                                        <p>28x.ico</p>
                                    </div>
                                    <div class="txt-center">
                                        <img width="64"  src="images/icons/4x.ico" alt="64x64">
                                        <p>64x64</p>
                                        <p>4x.ico</p>
                                    </div>
                                </div>
                            </div>
                            <div class="txt-center">
                                <h3 class="underline u-ruby">Satkey</h3>
                                <div class="wrapper xs1 md3 lg3">
                                    <div class="txt-center">
                                        <img width="256" src="images/icons/satkey256x.ico" alt="Satkey 256x256">
                                        <p>256x256</p>
                                        <p>satkey256x.ico</p>
                                    </div>
                                    <div class="txt-center">
                                        <img width="128" src="images/icons/satkey128x.ico" alt="Satkey 128x128">
                                        <p>128x128</p>
                                        <p>satkey128x.ico</p>
                                    </div>
                                    <div class="txt-center">
                                        <img width="64"  src="images/icons/satkey64x.ico" alt="Satkey 64x64">
                                        <p>64x64</p>
                                        <p>satkey64x.ico</p>
                                    </div>
                                </div>
                            </div>
                            <div class="txt-center">
                                <h3 class="underline u-ruby">Global Smart Solutions</h3>
                                <div class="wrapper xs1 md3 lg3">
                                    <div class="txt-center">
                                        <img width="256" src="images/icons/gss256x.ico" alt="gss 256x256">
                                        <p>256x256</p>
                                        <p>gss256x.ico</p>
                                    </div>
                                    <div class="txt-center">
                                        <img width="128" src="images/icons/gss128x.ico" alt="gss 128x128">
                                        <p>128x128</p>
                                        <p>gss128x.ico</p>
                                    </div>
                                    <div class="txt-center">
                                        <img width="64"  src="images/icons/gss64x.ico" alt="gss 64x64">
                                        <p>64x64</p>
                                        <p>gss64x.ico</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </section>
            <section id="forms">
                <header>
                    <h2 class="center">Forms</h2>
                </header>
                <body>
                    <section id="simple-inputs">
                        <h3 class="underline u-ruby">Simple inputs</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;input type="text" class="form-input">

        &lt;input type="text" class="form-input-extend" placeholder="Extending input">

        &lt;div>
            &lt;input class="form-check" type="checkbox" id="test1" />
            &lt;label for="test1" aria-describedby="label">Red&lt;/label>
        &lt;/div>

        &lt;label class="radio-label">
            &lt;input class="form-radio" type="radio" name="radio" />
            Apple
        &lt;/label>
                        </code></pre>
                        <input type="text" class="form-input" placeholder="Full width input">
                        <input type="text" class="form-input-extend" placeholder="Extending input">
                        <div class="wrapper xs2">
                            <p>
                                <input class="form-check" type="checkbox" id="test1" />
                                <label for="test1" aria-describedby="label">Red</label>
                            </p>
                            <p>
                                <input class="form-check" type="checkbox" id="test2" checked="checked" />
                                <label for="test2" aria-describedby="label">Green</label>
                            </p>
                            <p>
                                <input class="form-check" type="checkbox" id="test3" disabled />
                                <label for="test3" aria-describedby="label">Blue</label>
                            </p>
                            <p>
                                <input class="form-check" type="checkbox" id="test4"  checked="checked" disabled />
                                <label for="test4" aria-describedby="label">White</label>
                            </p>
                        </div>
                        <div class="wrapper xs2">
                            <label class="radio-label">
                                <input class="form-radio" type="radio" name="radio" />
                                Apple
                            </label>
                            <label  class="radio-label">
                                <input class="form-radio" type="radio" name="radio" />
                                Pear
                            </label>
                            <label  class="radio-label">
                                <input class="form-radio" type="radio" name="radio" />
                                Grape
                            </label>
                            <label  class="radio-label">
                                <input class="form-radio" type="radio" name="radio" />
                                Peach
                            </label>
                        </div>  
                    </section>
                    <section id="select">
                        <h3 class="underline u-ruby">Select</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;select name="my-select" id="my-select" class="form-select">
                &lt;option value="1">My option&lt;/option>
                &lt;option value="2">Another option&lt;/option>
                &lt;option value="3">Last option&lt;/option>
            &lt;/select>
        &lt;/section></code></pre>
                        <select name="my-select" id="my-select" class="form-select">
                            <option value="1">My option</option>
                            <option value="2">Another option</option>
                            <option value="3">Last option</option>
                        </select>
                    </section>
                    <section id="textarea">
                        <h3 class="underline u-ruby">Text Area</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;textarea class="form-input" name="txtarea" id="txtarea" cols="30" rows="10">My wonderfull textarea who permit me to tell some stories&lt;/textarea></code></pre>
                        <textarea class="form-input" name="txtarea" id="txtarea" cols="30" rows="10">My wonderfull textarea who permit me to tell some stories</textarea>
                    </section>
                    <section id="advanced-inputs">
                        <h3 class="underline u-ruby">Advanced inputs</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="wrapper xs2">
            &lt;input class="form-input rounded-3 morph-pressed" type="text">
            &lt;input class="form-input-extend rounded-3 morph-pressed" type="text">
        &lt;/div>
        &lt;select name="my-select" id="my-select" class="form-select rounded-3 morph-pressed">
            &lt;option value="1">My option&lt;/option>
            &lt;option value="2">Another option&lt;/option>
            &lt;option value="3">Last option&lt;/option>
        &lt;/select>
        &lt;textarea class="form-input rounded-3 morph-pressed" name="txtarea" id="txtarea" cols="30" rows="10">&lt;/textarea></code>
                        </pre>
                        <div class="wrapper xs2">
                            <input class="form-input rounded-3 morph-pressed" type="text">
                            <input class="form-input-extend rounded-3 morph-pressed" type="text">
                        </div>
                        <select name="my-select" id="my-select" class="form-select rounded-3 morph-pressed">
                            <option value="1">My option</option>
                            <option value="2">Another option</option>
                            <option value="3">Last option</option>
                        </select>
                        <textarea class="form-input rounded-3 morph-pressed" name="txtarea" id="txtarea" cols="30" rows="10"></textarea>
                    </section>
                </body>
            </section>
            <section id="components">
                <header>
                    <h2 class="center">Components</h2>
                </header>
                <main>
                    <section id="alerts">
                        <header>
                            <h3 class="underline u-ruby">Alerts</h3>
                        </header>
                        <main>
                            <section id="basicalerts">
                                <h4>Basic Alerts</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="p-3 my-2 rounded-1 blue light-4 txt-blue txt-dark-3">This is an informative alert&lt;/div>
        &lt;div class="p-3 my-2 rounded-1 green light-4 txt-green txt-dark-4">This is a success alert&lt;/div>
        &lt;div class="p-3 my-2 rounded-1 amber light-4 txt-amber txt-dark-4">This is a warning alert&lt;/div>
        &lt;div class="p-3 my-2 rounded-1 red light-4 txt-red txt-dark-4">This is an error alert&lt;/div></code></pre>
                                <div class="p-3 my-2 rounded-1 blue light-4 txt-blue txt-dark-3">This is an informative alert</div>
                                <div class="p-3 my-2 rounded-1 green light-4 txt-green txt-dark-4">This is a success alert</div>
                                <div class="p-3 my-2 rounded-1 amber light-4 txt-amber txt-dark-4">This is a warning alert</div>
                                <div class="p-3 my-2 rounded-1 red light-4 txt-red txt-dark-4">This is an error alert</div>
                            </section>
                            <section id="borderedalerts">
                                <h4>Bordered alerts</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="p-3 my-2 rounded-1 blue light-4 txt-blue txt-dark-3 bd-solid bd-blue bd-light-1 bd-1">This is an informative alert&lt;/div>
        &lt;div class="p-3 my-2 rounded-1 green light-4 txt-green txt-dark-4 border b-green b-dark-1 b-1">This is a success alert&lt;/div>
        &lt;div class="p-3 my-2 rounded-1 amber light-4 txt-amber txt-dark-4 border b-amber b-dark-1 b-1">This is a warning alert&lt;/div>
        &lt;div class="p-3 my-2 rounded-1 red light-4 txt-red txt-dark-4 border b-red b-1">This is an error alert&lt;/div></code></pre>
                                <div class="p-3 my-2 rounded-1 blue light-4 txt-blue txt-dark-3 border b-blue b-light-1 b-1">This is an informative alert</div>
                                <div class="p-3 my-2 rounded-1 green light-4 txt-green txt-dark-4 border b-green b-dark-1 b-1">This is a success alert</div>
                                <div class="p-3 my-2 rounded-1 amber light-4 txt-amber txt-dark-4 border b-amber b-dark-1 b-1">This is a warning alert</div>
                                <div class="p-3 my-2 rounded-1 red light-4 txt-red txt-dark-4 border b-red b-1">This is an error alert</div>
                            </section>
                        </main>
                    </section>
                    <section id="block-code">
                        <h3 class="underline u-ruby">Block code</h3>
                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;pre class="rounded-2 bg-2">&lt;code class="language-c"> // Your code here &lt;/code>&lt;/pre></code></pre>
                    <pre class="morph-pressed rounded-2 bg-2"><code class="language-c">        #include <stdio.h>
        int main() {
            // This is a code in C
            printf("Hello, World!");
            return 0;
        }</code></pre>
                        <span class="h4 my-3">Supported languages</span><br/>
                        <div class="wrapper lg4 md2 xs1">
                            <div>
                                <span class="h5">Markup</span>
                                <p class="ml-5">"language-markup"</p>
                                <p class="ml-5">"language-html"</p>
                                <p class="ml-5">"language-xml"</p>
                                <p class="ml-5">"language-svg"</p>
                                <p class="ml-5">"language-mathml"</p>
                                <p class="ml-5">"language-ssml"</p>
                                <p class="ml-5">"language-atom"</p>
                                <p class="ml-5">"language-rss"</p>
                            </div>
                            <div>
                                <span class="h5">CSS</span>
                                <p class="ml-5">"language-css"</p>
                            </div>
                            <div>
                                <span class="h5">C-Like</span>
                                <p class="ml-5">"language-clike"</p>
                            </div>
                            <div>
                                <span class="h5">JavaScript</span>
                                <p class="ml-5">"language-javascript"</p>
                                <p class="ml-5">"language-js"</p>
                            </div>
                            <div>
                                <span class="h5">Bash</span>
                                <p class="ml-5">"language-bash"</p>
                                <p class="ml-5">"language-sh"</p>
                                <p class="ml-5">"language-shell"</p>
                            </div>
                            <div>
                                <span class="h5">C</span>
                                <p class="ml-5">"language-c"</p>
                            </div>
                            <div>
                                <span class="h5">C++</span>
                                <p class="ml-5">"language-cpp"</p>
                            </div>
                            <div>
                                <span class="h5">Python</span>
                                <p class="ml-5">"language-python"</p>
                                <p class="ml-5">"language-py"</p>
                            </div>
                            <div>
                                <span class="h5">YAML</span>
                                <p class="ml-5">"language-yaml"</p>
                                <p class="ml-5">"language-yml"</p>
                            </div>
                        </div>
                    </section>
                    <section id="buttons">
                        <header>
                            <h3 class="underline u-ruby">Buttons</h3>
                        </header>
                        <main>
                            <section id="buttongroup">
                                <header>
                                    <h4>Button group</h4>
                                </header>
                                <body>
                                    <section>
                                        <h5>Simple button group</h5>
                                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="btn-group rounded-1">
            &lt;button class="btn dark-2">Button&lt;/button>
            &lt;button class="btn dark-2">Button&lt;/button>
            &lt;button class="btn dark-2">Button&lt;/button>
        &lt;/div></code></pre>
                                        <div class="p-5 bg-2 rounded-3">
                                            <div class="btn-group rounded-1">
                                                <button class="btn dark-2">Button</button>
                                                <button class="btn dark-2">Button</button>
                                                <button class="btn dark-2">Button</button>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <h5>Stylised button group</h5>
                                        <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="btn-group">
            &lt;button class="btn blue">Button&lt;/button>
            &lt;button class="btn white dark-2">Button&lt;/button>
            &lt;button class="btn error">Button&lt;/button>
        &lt;/div></code></pre>
                                        <div class="p-3 bg-2 rounded-3">
                                            <div class="btn-group">
                                                <button class="btn blue">Button</button>
                                                <button class="btn grey light-4 dark-2">Button</button>
                                                <button class="btn error">Button</button>
                                            </div>
                                        </div>
                                    </section>
                                </body>
                            </section>
                            <section id="normalbuttons">
                                <h4>Normal buttons</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;button class="btn rounded-1 blue">Click me !&lt;/button>
        &lt;button class="btn rounded-1 underline u-white red">Click me !&lt;/button>
        &lt;button class="btn rounded-1 border b-emerald b-dark-2 sapphire">Click me !&lt;/button></code></pre>
                                <div class="rounded-2 p-4 bg-2 wrapper lg4 md2 xs2 center align-center">
                                    <button class="btn rounded-1 blue">Hover me !</button>
                                    <button class="btn rounded-1 topaze txt-black">Hover me !</button>
                                    <button class="btn rounded-1 underline u-white perl">Hover me !</button>
                                    <button class="btn rounded-1 border b-emerald b-dark-2 sapphire txt-ruby">Hover me !</button>
                                </div>
                            </section>
                            <section id="circlebuttons">
                                <h4>Circle buttons</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;button class="btn btn-circle success border b-grey txt-green txt-dark-5">OK&lt;/button>
        &lt;button class="btn btn-circle error">X&lt;/button>
        &lt;button class="btn btn-circle ruby">X&lt;/button>
        &lt;button class="btn btn-circle red">X&lt;/button></code></pre>
                                <div class="rounded-2 p-4 bg-2 wrapper lg4 md2 xs2 center align-center">
                                    <button class="btn btn-circle success border b-grey txt-green txt-dark-5">OK</button>
                                    <button class="btn btn-circle error">X</button>
                                    <button class="btn btn-circle ruby">X</button>
                                    <button class="btn btn-circle red">X</button>
                                </div>
                            </section>
                            <section id="pressbuttons">
                                <h4>Validation buttons</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;button class="btn btn-validation rounded-1 grey">Click me !&lt;/button>
        &lt;button class="btn btn-validation rounded-3 clay txt-jade txt-light-3">Click me !&lt;/button>
        &lt;button class="btn btn-validation amber">Click me !&lt;/button>
        &lt;button class="btn btn-validation rounded-full red">Click me !&lt;/button></code></pre>
                                <div class="rounded-2 p-4 bg-2 wrapper lg4 md2 xs2 center align-center">
                                    <button class="btn btn-validation rounded-1 grey">Click me !</button>
                                    <button class="btn btn-validation rounded-3 clay txt-jade txt-light-3">Click me !</button>
                                    <button class="btn btn-validation amber">Click me !</button>
                                    <button class="btn btn-validation rounded-full red">Click me !</button>
                                </div>
                            </section>
                            </section>
                            <section id="activeclass">
                                <h4>Active class</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;button class="btn rounded-1 blue">Click me !&lt;/button>
        &lt;button class="btn active rounded-1 blue">Click me !&lt;/button></code></pre>
                                <div class="rounded-2 p-4 bg-2 wrapper lg4 md2 xs2 center align-center">
                                    <div class="flex fx-col">
                                        <button class="mb-2 btn rounded-1 blue">Click me !</button>
                                        <button class="btn active rounded-1 blue">Click me !</button>
                                    </div>
                                    <div class="flex fx-col fx-center">
                                        <button class="mb-2 btn rounded-1 underline u-white perl">Click me !</button>
                                        <button class="btn active rounded-1 underline u-white perl">Click me !</button>
                                    </div>
                                    <div class="flex fx-col fx-center">
                                        <button class="mb-2 btn btn-validation rounded-1 amber">Click me !</button>
                                        <button class="btn active btn-validation rounded-1 amber">Click me !</button>
                                    </div>
                                    <div class="flex fx-col fx-center">
                                        <button class="mb-2 btn btn-validation rounded-full red">Click me !</button>
                                        <button class="btn active btn-validation rounded-full red">Click me !</button>
                                    </div>
                                </div>
                            </section>
                            <section id="disabledclass">
                                <h4>Disabled class</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;button class="btn rounded-1 blue">Click me !&lt;/button>
        &lt;button class="btn disabled rounded-1 blue">Click me !&lt;/button></code></pre>
                                <div class="rounded-2 p-4 bg-2 wrapper lg4 md2 xs2 center align-center">
                                    <div class="flex fx-col">
                                        <button class="mb-2 btn rounded-1 blue">Click me !</button>
                                        <button class="btn disabled rounded-1 blue">Click me !</button>
                                    </div>
                                    <div class="flex fx-col fx-center">
                                        <button class="mb-2 btn rounded-1 underline u-white perl">Click me !</button>
                                        <button class="btn disabled rounded-1 underline u-white perl">Click me !</button>
                                    </div>
                                    <div class="flex fx-col fx-center">
                                        <button class="mb-2 btn btn-validation rounded-1 amber">Click me !</button>
                                        <button class="btn disabled btn-validation rounded-1 amber">Click me !</button>
                                    </div>
                                    <div class="flex fx-col fx-center">
                                        <button class="mb-2 btn btn-validation rounded-full red">Click me !</button>
                                        <button class="btn disabled btn-validation rounded-full red">Click me !</button>
                                    </div>
                                </div>
                            </section>
                            <section id="cards">
                                <h3 class="underline u-ruby">Cards</h3>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;div class="card white rounded-2 shadow-1 hoverable-1 mx-auto" style="max-width: 400px;">
            &lt;div class="card-img">
                &lt;img src="https://picsum.photos/500/300" class="responsive-media" alt="https://picsum.photos/500/300">
            &lt;/div>

            &lt;div class="card-content">
                &lt;span class="h3">Card example&lt;/span>
                &lt;div class="font-s3 txt-grey">Hoverable and shadow&lt;/div>
                &lt;div class="mt-3">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                    Nihil aliquid neque harum iusto quas, impedit est! 
                    Nobis quibusdam repellendus harum sequi optio exercitationem debitis, tenetur error id distinctio eos doloremque!
                &lt;/div>
            &lt;/div>

            &lt;div class="card-footer flex mt-1">
                &lt;div class="font-s5 ml-auto my-auto mr-3">Hover me&lt;/div>
                &lt;button class="btn clay light-1 rounded-1">OK&lt;/button>
            &lt;/div>
        &lt;/div></code></pre>
                                <div class="bg-2 rounded-3 p-3">
                                    <div class="card bg-3 rounded-2 shadow-1 hoverable-1 mx-auto" style="max-width: 400px;">
                                        <div class="card-img">
                                            <img src="https://picsum.photos/500/300" class="responsive-media" alt="laptop">
                                        </div>

                                        <div class="card-content">
                                            <span class="h3">Card example</span>
                                            <div class="font-s3 txt-grey">Hoverable and shadow</div>
                                            <div class="mt-3">
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            Nihil aliquid neque harum iusto quas, impedit est! 
                                            Nobis quibusdam repellendus harum sequi optio exercitationem debitis, tenetur error id distinctio eos doloremque!
                                            </div>
                                        </div>

                                        <div class="card-footer flex mt-1">
                                            <div class="font-s5 ml-auto my-auto mr-3">Hover me</div>
                                            <button class="btn clay light-1 rounded-1">OK</button>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section>
                            <section id="breadcrumb">
                                <h3 class="underline u-ruby">Breadcrumb</h3>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">      &lt;div class="breadcrumb blue p-2">
            &lt;!-- Breadcrumb item -->
            &lt;div class="breadcrumb__item">&lt;a href="#">Link&lt;/a>&lt;/div>
            &lt;div class="breadcrumb__item">&lt;a href="#">Link&lt;/a>&lt;/div>
            &lt;div class="breadcrumb__item">Active link&lt;/div>
        &lt;/div></code></pre>
                            <div class="breadcrumb blue p-2">
                                <div class="breadcrumb__item"><a href="#">Link</a></div>
                                <div class="breadcrumb__item"><a href="#">Link</a></div>
                                <div class="breadcrumb__item">Active link</div>
                            </div>
                            </section>
                            <section id="collapsible">
                                <h3 class="underline u-ruby">Collapsible</h3>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">        &lt;button class="btn btn-validation ruby rounded-1 collapsible">Collapsible trigger&lt;/button>
        &lt;div class="collapsible-content">
            &lt;p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Nemo necessitatibus, recusandae deleniti perferendis tempora, eligendi expedita rerum nostrum nesciunt, 
            quis earum sapiente pariatur et eaque voluptatem vel quos voluptate odit.
            &lt;/p>
        &lt;/div></code></pre>
                                <button class="btn btn-validation ruby rounded-1 collapsible">Collapsible trigger</button>
                                <div class="collapsible-content">
                                    <p class="rounded-2 p-5 bg-2">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Nemo necessitatibus, recusandae deleniti perferendis tempora, 
                                        eligendi expedita rerum nostrum nesciunt, 
                                        quis earum sapiente pariatur et eaque voluptatem vel quos voluptate odit.
                                    </p>
                                </div>
                            </section>
                            <section id="tree-diagram">
                                <h3 class="underline u-ruby">tree-diagram</h3>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">      &lt;div class="tree-diagram">
            &lt;ul>
                &lt;li class="tree-diagram__root">root
                    &lt;ul>
                        &lt;li>class&lt;/li>
                        &lt;li>
                        &lt;!-- Content -->
                        class
                        &lt;!-- Sub items -->
                            &lt;ul>
                                &lt;li>
                                    &lt;!-- Content -->
                                    sub-class
                                    &lt;ul>
                                        &lt;li>sub-sub-class&lt;/li>
                                    &lt;/ul>
                                &lt;/li>
                                &lt;li>sub-class&lt;/li>
                            &lt;/ul>
                        &lt;/li>
                    &lt;/li>
                &lt;/ul>
            &lt;/ul>
        &lt;/div></code></pre>
                                <div class="rounded-3 morph bg-2 p-5 centering">
                                    <div class="tree-diagram">
                                        <ul>
                                            <li class="tree-diagram__root">root
                                                <ul>
                                                    <li>
                                                    <!-- Content -->
                                                    class
                                                    <!-- Sub items -->
                                                        <ul>
                                                            <li>
                                                                <!-- Content -->
                                                                sub-class
                                                                <!-- Sub items -->
                                                                <ul>
                                                                    <li>sub-sub-class</li>
                                                                    <li>sub-sub-class</li>
                                                                </ul>
                                                            </li>
                                                            <li>sub-class</li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                    <!-- Content -->
                                                    class
                                                    <!-- Sub items -->
                                                        <ul>
                                                            <li>
                                                                <!-- Content -->
                                                                sub-class
                                                                <ul>
                                                                    <li>sub-sub-class</li>
                                                                </ul>
                                                            </li>
                                                            <li>sub-class
                                                                <!-- Sub items -->
                                                                <ul>
                                                                    <li>sub-sub-class</li>
                                                                    <li>sub-sub-class</li>
                                                                </ul>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </li>
                                            </ul>
                                        </ul>
                                    </div>
                                </div>
                            </section>
                            <section id="folder-structure">
                                <h3 class="underline u-ruby">Folder structure</h3>
                                <h4>Structure</h4>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">      &lt;div class="folder-structure">
            &lt;ul>
                &lt;li>
                    &lt;!-- Content -->
                    &lt;span>folder&lt;/span>
                    &lt;!-- Sub items -->
                    &lt;ul>
                        &lt;li>
                            &lt;!-- Content -->
                            &lt;span>sub-folder&lt;/span>

                            &lt;!-- Sub items -->
                            &lt;ul>
                                &lt;li>&lt;span class="prefix-file">sub-sub-file with icon&lt;/span>&lt;/li>
                                &lt;li>&lt;span class="prefix-folder-open">sub-sub-folder open&lt;/span>&lt;/li>
                            &lt;/ul>
                        &lt;/li>
                        &lt;li>&lt;span class="prefix-folder">sub-folder with icon&lt;/span>&lt;/li>
                    &lt;/ul>
                &lt;/li>
            &lt;/ul>
        &lt;/div></code></pre>
                                <div class="rounded-3 morph bg-2 p-5 centering">
                                    <div class="folder-structure">
                                        <ul>
                                            <li>
                                                <!-- Content -->
                                                <span>folder</span>
                                                <!-- Sub items -->
                                                <ul>
                                                    <li>
                                                        <!-- Content -->
                                                        <span>sub-folder</span>

                                                        <!-- Sub items -->
                                                        <ul>
                                                            <li><span class="prefix-file">sub-sub-file with icon</span></li>
                                                            <li><span class="prefix-folder-open">sub-sub-folder open</span></li>
                                                        </ul>
                                                    </li>
                                                    <li><span class="prefix-folder">sub-folder with icon</span></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <h4>Prefixes</h4>
                                <div class="wrapper xs2 md4 lg6">
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-file">.prefix-file</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-multi-file">.prefix-multi-file</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-folder">.prefix-folder</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-folder-open">.prefix-folder-open</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-package">.prefix-package</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-message">.prefix-message</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-book">.prefix-book</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-book-red">.prefix-book-red</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-book-green">.prefix-book-green</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-book-blue">.prefix-book-blue</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-book-orange">.prefix-book-orange</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-book-open">.prefix-book-open</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-log">.prefix-log</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-calendar">.prefix-calendar</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-chart">.prefix-chart</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-chart-line">.prefix-chart-line</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-board">.prefix-board</span>
                                    </div>
                                    <div class="rounded-2 bg-2 p-2 m-1">
                                        <span class="prefix-tag">.prefix-tag</span>
                                    </div>
                                </div>
                            </section>
                            <section id="table">
                                <h3 class="underline u-ruby">Table</h3>
                                <pre class="morph-pressed rounded-2 bg-2"><code class="language-html">    &lt;div class="table-responsive">        
        &lt;table class="table">
            &lt;thead>
                &lt;th>common&lt;/th>
                &lt;th>fastened&lt;/th>
                &lt;th>thin&lt;/th>
                &lt;th>spider&lt;/th>
                &lt;th>ear&lt;/th>
            &lt;/thead>
            &lt;tbody>
                &lt;tr>
                    &lt;td>brass&lt;/td>
                    &lt;td>pie&lt;/td>
                    &lt;td>managed&lt;/td>
                    &lt;td>chart&lt;/td>
                    &lt;td>century&lt;/td>
                &lt;/tr>
                &lt;tr>
                    &lt;td>successful&lt;/td>
                    &lt;td>no&lt;/td>
                    &lt;td>test&lt;/td>
                    &lt;td>usual&lt;/td>
                    &lt;td>action&lt;/td>
                &lt;/tr>
            &lt;/tbody>
        &lt;/table>
     &lt;/div></code></pre>
                                <div class="responsive-table">
                                    <table class="table">
                                        <thead>
                                            <th>common</th>
                                            <th>fastened</th>
                                            <th>thin</th>
                                            <th>spider</th>
                                            <th>ear</th>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>brass</td>
                                                <td>pie</td>
                                                <td>managed</td>
                                                <td>chart</td>
                                                <td>century</td>
                                            </tr>
                                            <tr>
                                                <td>successful</td>
                                                <td>no</td>
                                                <td>test</td>
                                                <td>usual</td>
                                                <td>action</td>
                                            </tr>
                                            <tr>
                                                <td>brass</td>
                                                <td>pie</td>
                                                <td>managed</td>
                                                <td>chart</td>
                                                <td>century</td>
                                            </tr>
                                            <tr>
                                                <td>successful</td>
                                                <td>no</td>
                                                <td>test</td>
                                                <td>usual</td>
                                                <td>action</td>
                                            </tr>
                                            <tr>
                                                <td>brass</td>
                                                <td>pie</td>
                                                <td>managed</td>
                                                <td>chart</td>
                                                <td>century</td>
                                            </tr>
                                            <tr>
                                                <td>successful</td>
                                                <td>no</td>
                                                <td>test</td>
                                                <td>usual</td>
                                                <td>action</td>
                                            </tr>
                                            <tr>
                                                <td>brass</td>
                                                <td>pie</td>
                                                <td>managed</td>
                                                <td>chart</td>
                                                <td>century</td>
                                            </tr>
                                            <tr>
                                                <td>successful</td>
                                                <td>no</td>
                                                <td>test</td>
                                                <td>usual</td>
                                                <td>action</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </section>
                        </main>
                    </section>
                    <section id="notification">
                        <h3 class="underline u-ruby">Notification</h3>
                        <div class="bg-2 rounded-3 morph" style="height: 5rem">
                            <div style="display: inline-block;position: relative;">
                                <div class="notification">
                                    <!-- Content -->
                                    <div class="notification__body">
                                        This is a notification
                                    </div>
                                    
                                    <!-- Close button -->
                                    <button class="notification__close">
                                        <div class="notification__close-line notification__close-line--first"></div>
                                        <div class="notification__close-line notification__close-line--second"></div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </section>
            </section>
            <section id="decorations">
                <header>
                    <h2 class="center">Decorations</h2>
                </header>
                <body>
                    <section id="texts">
                        <h3 class="underline u-ruby">Texts</h3>
                        <div class="wrapper lg3 md2 xs1">
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 bold">bold</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 italic">italic</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 italic-1">italic-1</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 italic-2">italic-2</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 italic-3">italic-3</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 italic-4">italic-4</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 underline">underline</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 overline">overline</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 over-underline">over-underline</div>
                            <div></div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 through">through</div>
                            <div></div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 uppercase">uppercase</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 lowercase">lowercase</div>
                            <div class="flex fx-center align-center border b-grey shadow-1 m-5 p-5 capitalize">capitalize</div>
                        </div>
                    </section>
                    <section id="round">
                        <h3 class="underline u-ruby">Round</h3>
                        <div class="wrapper lg3 md2 xs1">
                            <div class="flex fx-center align-center border rounded-1 m-5 p-5">rounded-1</div>
                            <div class="flex fx-center align-center border rounded-2 m-5 p-5">rounded-2</div>
                            <div class="flex fx-center align-center border rounded-3 m-5 p-5">rounded-3</div>
                            <div class="flex fx-center align-center border rounded-4 m-5 p-5">rounded-4</div>
                            <div class="flex fx-center align-center border rounded-5 m-5 p-5">rounded-5</div>
                            <div class="flex fx-center align-center border rounded-full m-5 p-5">rounded-full</div>
                        </div>
                    </section>
                    <section id="hoverable">
                        <h3 class="underline u-ruby">Hoverable</h3>
                        <div class="wrapper lg3 md2 xs1">
                            <div class="flex fx-center align-center shadow-1 hoverable-1 m-5 p-5">hoverable-1</div>
                            <div class="flex fx-center align-center shadow-1 hoverable-2 m-5 p-5">hoverable-2</div>
                            <div class="flex fx-center align-center shadow-1 hoverable-3 m-5 p-5">hoverable-3</div>
                            <div class="flex fx-center align-center shadow-1 hoverable-4 m-5 p-5">hoverable-4</div>
                            <div class="flex fx-center align-center shadow-1 hoverable-5 m-5 p-5">hoverable-5</div>
                        </div>
                    </section>
                    <section id="shadows">
                        <h3 class="underline u-ruby">Shadows</h3>
                        <div class="wrapper lg3 md2 xs1">
                            <div class="flex fx-center align-center shadow-1 m-5 p-5">shadow-1</div>
                            <div class="flex fx-center align-center shadow-2 m-5 p-5">shadow-2</div>
                            <div class="flex fx-center align-center shadow-3 m-5 p-5">shadow-3</div>
                            <div class="flex fx-center align-center shadow-4 m-5 p-5">shadow-4</div>
                            <div class="flex fx-center align-center shadow-5 m-5 p-5">shadow-5</div>
                        </div>
                    </section>
                    <section id="txt-shadows">
                        <h3 class="underline u-ruby">Text Shadows</h3>
                        <div class="wrapper lg3 md2 xs1">
                            <div class="flex fx-center align-center shadow-1 txt-shadow-0 m-5 p-5">txt-shadow-0</div>
                            <div class="flex fx-center align-center shadow-1 txt-shadow-1 m-5 p-5">txt-shadow-1</div>
                            <div class="flex fx-center align-center shadow-1 txt-shadow-2 m-5 p-5">txt-shadow-2</div>
                            <div class="flex fx-center align-center shadow-1 txt-shadow-3 m-5 p-5">txt-shadow-3</div>
                            <div class="flex fx-center align-center shadow-1 txt-shadow-4 m-5 p-5">txt-shadow-4</div>
                        </div>
                    </section>
                    <section id="morph">
                        <h3 class="underline u-ruby">Neumorphic</h3>
                        <div class="wrapper lg3 md2 xs1">
                            <div class="flex fx-center align-center rounded-3 morph m-5 p-5">Default Morph</div>
                            <div class="flex fx-center align-center rounded-3 morph-tl m-5 p-5">Top Left Morph</div>
                            <div class="flex fx-center align-center rounded-3 morph-tr m-5 p-5">Top Right Morph</div>
                            <div class="flex fx-center align-center rounded-3 morph-bl m-5 p-5">Bottom Right Morph</div>
                            <div class="flex fx-center align-center rounded-3 morph-br m-5 p-5">Bottom Right Morph</div>
                        </div>
                        <div class="flex fx-center align-center rounded-3 morph-pressed m-5 p-5">Default Morph</div>
                    </section>
                    <section id="borders">
                        <header>
                            <h3 class="underline u-ruby">Borders</h3>
                        </header>
                        <body>
                            <section id="simpleborder">
                                <h4>Simple border</h4>
                                <div class="bg-2 p-5 rounded-3">
                                    <div class="border m-5 p-5 rounded-3">border</div>
                                </div>
                            </section>
                            <section id="bordercolors">
                            <h4>Borders colors</h4>
                            <div class="wrapper lg3 md2 xs1">
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-blue b-dark-5">border b-blue b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-dark-4">border b-blue b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-dark-3">border b-blue b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-dark-2">border b-blue b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-dark-1">border b-blue b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue">border b-blue</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-light-1">border b-blue b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-light-2">border b-blue b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-light-3">border b-blue b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-blue b-light-4">border b-blue b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-red b-dark-5">border b-red b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-dark-4">border b-red b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-dark-3">border b-red b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-dark-2">border b-red b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-dark-1">border b-red b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-red">border b-red</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-light-1">border b-red b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-light-2">border b-red b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-light-3">border b-red b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-red b-light-4">border b-red b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-green b-dark-5">border b-green b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-dark-4">border b-green b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-dark-3">border b-green b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-dark-2">border b-green b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-dark-1">border b-green b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-green">border b-green</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-light-1">border b-green b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-light-2">border b-green b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-light-3">border b-green b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-green b-light-4">border b-green b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-dark-5">border b-lapis b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-dark-4">border b-lapis b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-dark-3">border b-lapis b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-dark-2">border b-lapis b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-dark-1">border b-lapis b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis">border b-lapis</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-light-1">border b-lapis b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-light-2">border b-lapis b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-light-3">border b-lapis b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-lapis b-light-4">border b-lapis b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-dark-5">border b-ruby b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-dark-4">border b-ruby b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-dark-3">border b-ruby b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-dark-2">border b-ruby b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-dark-1">border b-ruby b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby">border b-ruby</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-light-1">border b-ruby b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-light-2">border b-ruby b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-light-3">border b-ruby b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-ruby b-light-4">border b-ruby b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-jade b-dark-5">border b-jade b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-dark-4">border b-jade b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-dark-3">border b-jade b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-dark-2">border b-jade b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-dark-1">border b-jade b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade">border b-jade</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-light-1">border b-jade b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-light-2">border b-jade b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-light-3">border b-jade b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-jade b-light-4">border b-jade b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-dark-5">border b-sapphire b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-dark-4">border b-sapphire b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-dark-3">border b-sapphire b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-dark-2">border b-sapphire b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-dark-1">border b-sapphire b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire">border b-sapphire</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-light-1">border b-sapphire b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-light-2">border b-sapphire b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-light-3">border b-sapphire b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-sapphire b-light-4">border b-sapphire b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-perl b-dark-5">border b-perl b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-dark-4">border b-perl b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-dark-3">border b-perl b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-dark-2">border b-perl b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-dark-1">border b-perl b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl">border b-perl</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-light-1">border b-perl b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-light-2">border b-perl b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-light-3">border b-perl b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-perl b-light-4">border b-perl b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-dark-5">border b-emerald b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-dark-4">border b-emerald b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-dark-3">border b-emerald b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-dark-2">border b-emerald b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-dark-1">border b-emerald b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald">border b-emerald</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-light-1">border b-emerald b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-light-2">border b-emerald b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-light-3">border b-emerald b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-emerald b-light-4">border b-emerald b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-amber b-dark-5">border b-amber b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-dark-4">border b-amber b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-dark-3">border b-amber b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-dark-2">border b-amber b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-dark-1">border b-amber b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber">border b-amber</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-light-1">border b-amber b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-light-2">border b-amber b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-light-3">border b-amber b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-amber b-light-4">border b-amber b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-clay b-dark-5">border b-clay b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-dark-4">border b-clay b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-dark-3">border b-clay b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-dark-2">border b-clay b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-dark-1">border b-clay b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay">border b-clay</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-light-1">border b-clay b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-light-2">border b-clay b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-light-3">border b-clay b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-clay b-light-4">border b-clay b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-grey b-dark-5">border b-grey b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-dark-4">border b-grey b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-dark-3">border b-grey b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-dark-2">border b-grey b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-dark-1">border b-grey b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey">border b-grey</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-light-1">border b-grey b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-light-2">border b-grey b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-light-3">border b-grey b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-grey b-light-4">border b-grey b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-dark-5">border b-topaze b-dark-5</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-dark-4">border b-topaze b-dark-4</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-dark-3">border b-topaze b-dark-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-dark-2">border b-topaze b-dark-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-dark-1">border b-topaze b-dark-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze">border b-topaze</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-light-1">border b-topaze b-light-1</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-light-2">border b-topaze b-light-2</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-light-3">border b-topaze b-light-3</div>
                                    <div class="p-3 m-1 rounded-2 border b-topaze b-light-4">border b-topaze b-light-4</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-error">border b-error</div>
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-warning">border b-warning</div>
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-success">border b-success</div>
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-primary">border b-primary</div>
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-secondary">border b-secondary</div>
                                </div>
                                <div class="morph m-2 rounded-2 p-2 bg-2">
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-black">border</div>
                                    <div class="flex flex-center align-center p-5 mb-2 m-1 border b-white">border b-white</div>
                                </div>
                            </div>
                            </section>
                        </body>
                    </section>
                    <section id="underlines">
                        <header>
                            <h3 class="underline u-ruby">Underlines</h3>
                        </header>
                        <body>
                            <section id="underlinescolors">
                                <h4>Underlines colors</h4>
                                <p>Works with <code class="language-html">overline</code>, <code class="language-html">over-underline</code> and <code class="language-html">through</code></p>
                                <div class="wrapper lg3 md2 xs1">
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-dark-5">underline u-blue u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-dark-4">underline u-blue u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-dark-3">underline u-blue u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-dark-2">underline u-blue u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-dark-1">underline u-blue u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue">underline u-blue</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-light-1">underline u-blue u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-light-2">underline u-blue u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-light-3">underline u-blue u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-blue u-light-4">underline u-blue u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-red u-dark-5">underline u-red u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-dark-4">underline u-red u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-dark-3">underline u-red u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-dark-2">underline u-red u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-dark-1">underline u-red u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red">underline u-red</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-light-1">underline u-red u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-light-2">underline u-red u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-light-3">underline u-red u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-red u-light-4">underline u-red u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-green u-dark-5">underline u-green u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-dark-4">underline u-green u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-dark-3">underline u-green u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-dark-2">underline u-green u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-dark-1">underline u-green u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green">underline u-green</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-light-1">underline u-green u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-light-2">underline u-green u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-light-3">underline u-green u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-green u-light-4">underline u-green u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-dark-5">underline u-lapis u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-dark-4">underline u-lapis u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-dark-3">underline u-lapis u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-dark-2">underline u-lapis u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-dark-1">underline u-lapis u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis">underline u-lapis</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-light-1">underline u-lapis u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-light-2">underline u-lapis u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-light-3">underline u-lapis u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-lapis u-light-4">underline u-lapis u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-dark-5">underline u-ruby u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-dark-4">underline u-ruby u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-dark-3">underline u-ruby u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-dark-2">underline u-ruby u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-dark-1">underline u-ruby u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby">underline u-ruby</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-light-1">underline u-ruby u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-light-2">underline u-ruby u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-light-3">underline u-ruby u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-ruby u-light-4">underline u-ruby u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-dark-5">underline u-jade u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-dark-4">underline u-jade u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-dark-3">underline u-jade u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-dark-2">underline u-jade u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-dark-1">underline u-jade u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade">underline u-jade</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-light-1">underline u-jade u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-light-2">underline u-jade u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-light-3">underline u-jade u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-jade u-light-4">underline u-jade u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-dark-5">underline u-sapphire u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-dark-4">underline u-sapphire u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-dark-3">underline u-sapphire u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-dark-2">underline u-sapphire u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-dark-1">underline u-sapphire u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire">underline u-sapphire</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-light-1">underline u-sapphire u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-light-2">underline u-sapphire u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-light-3">underline u-sapphire u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-sapphire u-light-4">underline u-sapphire u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-dark-5">underline u-perl u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-dark-4">underline u-perl u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-dark-3">underline u-perl u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-dark-2">underline u-perl u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-dark-1">underline u-perl u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl">underline u-perl</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-light-1">underline u-perl u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-light-2">underline u-perl u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-light-3">underline u-perl u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-perl u-light-4">underline u-perl u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-dark-5">underline u-emerald u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-dark-4">underline u-emerald u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-dark-3">underline u-emerald u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-dark-2">underline u-emerald u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-dark-1">underline u-emerald u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald">underline u-emerald</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-light-1">underline u-emerald u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-light-2">underline u-emerald u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-light-3">underline u-emerald u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-emerald u-light-4">underline u-emerald u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-dark-5">underline u-amber u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-dark-4">underline u-amber u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-dark-3">underline u-amber u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-dark-2">underline u-amber u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-dark-1">underline u-amber u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber">underline u-amber</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-light-1">underline u-amber u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-light-2">underline u-amber u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-light-3">underline u-amber u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-amber u-light-4">underline u-amber u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-dark-5">underline u-clay u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-dark-4">underline u-clay u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-dark-3">underline u-clay u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-dark-2">underline u-clay u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-dark-1">underline u-clay u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay">underline u-clay</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-light-1">underline u-clay u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-light-2">underline u-clay u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-light-3">underline u-clay u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-clay u-light-4">underline u-clay u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-dark-5">underline u-grey u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-dark-4">underline u-grey u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-dark-3">underline u-grey u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-dark-2">underline u-grey u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-dark-1">underline u-grey u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey">underline u-grey</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-light-1">underline u-grey u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-light-2">underline u-grey u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-light-3">underline u-grey u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-grey u-light-4">underline u-grey u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-dark-5">underline u-topaze u-dark-5</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-dark-4">underline u-topaze u-dark-4</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-dark-3">underline u-topaze u-dark-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-dark-2">underline u-topaze u-dark-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-dark-1">underline u-topaze u-dark-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze">underline u-topaze</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-light-1">underline u-topaze u-light-1</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-light-2">underline u-topaze u-light-2</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-light-3">underline u-topaze u-light-3</div>
                                        <div class="p-3 m-1 rounded-2 underline u-topaze u-light-4">underline u-topaze u-light-4</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-error">underline u-error</div>
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-warning">underline u-warning</div>
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-success">underline u-success</div>
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-primary">underline u-primary</div>
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-secondary">underline u-secondary</div>
                                    </div>
                                    <div class="morph m-2 rounded-2 p-2 bg-2">
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-black">border</div>
                                        <div class="flex flex-center align-center p-5 mb-2 m-1 underline u-white black txt-red">underline u-white</div>
                                    </div>
                                </div>
                            </section>
                        </body>
                    </section>
                    <section>
                        <h3 id="cursors">Cursors</h3>
                        <div class="wrapper lg5 md4 xs2">
                            <div class="border b-grey b-dark-2 cursor-default m-5 p-5 flex fx-center align-center grey light-2">cursor-default</div>
                            <div class="border b-grey b-dark-2 cursor-none m-5 p-5 flex fx-center align-center grey light-2">cursor-none</div>
                            <div class="border b-grey b-dark-2 cursor-help m-5 p-5 flex fx-center align-center grey light-2">cursor-help</div>
                            <div class="border b-grey b-dark-2 cursor-pointer m-5 p-5 flex fx-center align-center grey light-2">cursor-pointer</div>
                            <div class="border b-grey b-dark-2 cursor-progress m-5 p-5 flex fx-center align-center grey light-2">cursor-progress</div>
                            <div class="border b-grey b-dark-2 cursor-wait m-5 p-5 flex fx-center align-center grey light-2">cursor-wait</div>
                            <div class="border b-grey b-dark-2 cursor-text m-5 p-5 flex fx-center align-center grey light-2">cursor-text</div>
                            <div class="border b-grey b-dark-2 cursor-grab m-5 p-5 flex fx-center align-center grey light-2">cursor-grab</div>
                            <div class="border b-grey b-dark-2 cursor-not-allowed m-5 p-5 flex fx-center align-center grey light-2">cursor-not-allowed</div>
                            <div class="border b-grey b-dark-2 cursor-zoom-in m-5 p-5 flex fx-center align-center grey light-2">cursor-zoom-in</div>
                            <div class="border b-grey b-dark-2 cursor-zoom-out m-5 p-5 flex fx-center align-center grey light-2">cursor-zoom-out</div>
                        </div>
                    </section>
                </body>
            </section>
        </div>
    </main>
</body>
</html>

<script src="script.min.js"></script>