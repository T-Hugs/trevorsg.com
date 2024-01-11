<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="GENERATOR" content="Microsoft FrontPage 1.0" />
    <meta name="description" content="Personal website of Trevor Gau" />
    <title>Trevor Gau</title>

    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const chickenButton = document.getElementById("chicken");
        chickenButton.addEventListener("click", chickenParty);
      });

      function chickenParty() {
        if (document.querySelector(".party-chicken")) {
          return;
        }
        for (let i = 0; i < 100; i++) {
          setTimeout(spawnChicken, i * 100);
        }
      }

      function spawnChicken() {
        const chicken = document.createElement("div");
        chicken.setAttribute("role", "presentation");
        chicken.classList.add("party-chicken");
        chicken.innerHTML = "🐔";
        chicken.style.position = "fixed";
        chicken.style.left = Math.random() * 100 + "%";
        chicken.style.top = "-150px";
        chicken.style.fontSize = (10 + (Math.random() * 90)) + "px";
        chicken.style.transform = "rotate(" + Math.random() * 360 + "deg)";
        chicken.style.animation =
          "chicken " + (5 + Math.random() * 15) + "s linear none";
        document.body.appendChild(chicken);
        setTimeout(() => {
          chicken.remove();
        }, 20000);
      }
    </script>

    <style>
      body {
        margin: 0;
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #121212;
      }
      #chicken {
        cursor: pointer;
        user-select: none;
      }
      .party-chicken {
        position: fixed;
        pointer-events: none;
        transform: translate(-50%, -50%);
        font-size: 100px;
      }
      @keyframes chicken {
        0% {
          top: -120px;
        }
        100% {
          top: 110vh;
          transform: rotate(360deg);
          opacity: 0.8;
        }
      }
      .main {
        background-color: #ffffff;
        margin: 40px 20px 0 20px;
        padding: 20px;
        border: 3px solid #121212;
        border-radius: 40px;
        font-family: Roboto, arial, sans-serif;
      }
      .title {
        text-align: center;
        font-size: 24px;
        font-weight: bold;
      }
      .subtitle {
        text-align: center;
        color: #666;
        font-size: 16px;
      }
      .info {
        text-align: center;
        list-style-type: none;
        padding: 0;
      }
      .info li {
        margin: 8px 0;
      }
      a {
        text-decoration: none;
        color: #bb5c00;
      }
      .footer {
        margin-top: 30px;
        text-align: right;
        font-size: 12px;
        color: #666;
        font-weight: bold;
        text-transform: uppercase;
      }
      @media screen and (max-width: 1200px) {
        a {
          display: inline-block;
          padding: 8px;
        }
      }
      @media screen and (min-width: 1200px) {
        body {
          margin: 0;
        }
        .main {
          width: 960px;
          margin: 40px auto 0 auto;
          padding: 50px;
          border: 3px solid #121212;
          border-radius: 80px;
          font-family: Roboto, arial, sans-serif;
        }
        .title {
          text-align: center;
          font-size: 38px;
          font-weight: bold;
        }
        .subtitle {
          text-align: center;
          color: #666;
          font-size: 24px;
        }
        .info {
          text-align: center;
          list-style-type: none;
        }
        .info li {
          margin: 8px 0;
        }
        a {
          text-decoration: none;
          color: #bb5c00;
        }
        .footer {
          margin-top: 30px;
          text-align: right;
        }
      }
    </style>
  </head>
  <body>
    <div class="main">
      <p class="title">I am Trevor Gau</p>
      <p class="subtitle">
        I am really good at websites.<br />I am <em>not</em> looking for
        work.<br /><span role="button" id="chicken">🐔</span>
      </p>

      <ul class="info">
        <li>phone: (281) 377-5337</li>
        <li>email: yo@tgau.me</li>
        <li>
          <a href="https://facebook.com/trevorsg" rel="nofollow" target="_blank"
            >facebook</a
          >
        </li>
        <li>
          <a
            href="https://www.linkedin.com/in/trevor-gau-1a662410"
            rel="nofollow"
            target="_blank"
            >linkedin</a
          >
        </li>
        <li>
          <a href="https://twitter.com/trevorsg" rel="nofollow" target="_blank"
            >twitter</a
          >
        </li>
      </ul>

      <p class="footer">Peace,<br />T-Hugs</p>
      <!-- test -->
    </div>

    <script>
      console.log(
        "Do NOT paste any code into the console that you do not understand! You could be allowing a hacker into your bedroom via an attack known as Self-XSS. For more info, see https://en.wikipedia.org/wiki/Self-XSS."
      );
    </script>
  </body>
</html>
