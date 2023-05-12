const logo = `
<polygon id="beard" points="
75,70 
75,95 
93,105 
107,105 
125,95 
125,70 
115,70 
115,85 
105,90 
95,90 
85,85 
85,70" 
fill="rgb(128, 145, 177)" />
<polygon id="moustache" points="
115,85
103,80
97,80
85,85
85,90
97,85
103,85
115,90"
fill="rgb(128, 145, 177)" />
<polygon id="glasses" points="
85,65
98,65
98,70
102,70
102,65
115,65
115,75
102,75
102,70
98,70
98,75
85,75"
fill="none"
stroke="rgb(128, 145, 177)"
stroke-width="2px" />
`;

const loading = `
    <div class="center">
        <svg height="200" width="200">
            <circle class="outer outer-spin" cx="100" cy="83" r="40">
            </circle>
            <circle class="inner inner-spin" cx="100" cy="83" r="36">
            </circle>
            ` + logo + `
        </svg>
        <span id="loading-text">Loading</span>
    </div>
`;

const title = `
<div id='title-text' class="fade-in"><h1>Paul Charpie</h1></div>
<div class="center">
    <svg height="200" width="200">
        <circle class="outer fade-in" cx="100" cy="83" r="40">
        </circle>
        <circle class="inner fade-in" cx="100" cy="83" r="36">
        </circle>
        ` + logo + `
    </svg>
</div>
<div id='hero-text' class="fade-in"><h1>Web Developer</h1></div>
`;

const links = `
<div id="about" class="fade-in"></div>
`;

