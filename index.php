<!DOCTYPE html>
<html>
    <head>
        <title>Test</title>

        <link href="jquery.json-view.min.css" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-2.1.4.min.js" charset="utf-8"></script>
        <script src="jquery.json-view.min.js"></script>

        <style>
          body {
            background: #444;
          }

          #element ul li {
            color : #f4a63e;
            font-size : 16px;
            font-family: Monaco;
          }

          #element ul li span.q {
            color : #c3711b
          }

          #element ul li .str ,
          #element ul li .null,
          #element ul li .bool,
          #element ul li .num {
            color : #de572c;
            font-weight: normal;
          }

          #element { max-width:760px; margin:0 auto;}
        </style>

    </head>
<body>

<div id="element"></div>

<script>
  $(function() {

      var json = {
          profile : {
            name: 'Metodi Deribanov',
            profession: 'web developer',
            email: 'imaginois@gmail.com',
            blog: 'imaginois.com',
            phone: ['+359 888 04 82 32', '+359 885 26 26 59'],
            skype: 'imaginois',
            nationality: 'bulgarian',
            mission: 'Warden of the north and protector of the realm',
            languages : ['English'],
            excerpts : [
              {
                aboutme : [
                  ['minimalist fovever', 'commas after > commas first', 'git > svn', 'spaces > tabs', 'php is the worst and the gratest thing that happened to the web']
                ]
              }
            ]
          },
          work : [
            {
              Agilewings : {
                title : 'Front-end developer',
                period: '02.2015 - 09.2015'
              }
            },
            {
              Playbox : {
                title : 'Javascript developer',
                period: '03.2013 - 11.2014'
              }
            },
            {
              Mentormate : {
                title : 'Javascript developer',
                period: '06.2012 - 03.2013'
              }
            },
            {
              QuestersGroup : {
                title : 'Front-end developer',
                period: '10.2011 - 06.2012'
              }
            },
            {
              Freelance : {
                title : 'Web Developer',
                period: '2007 - 10.2011'
              }
            }
          ],
          skils : [
            {
              Javascript : '*********-'
            },
            {
              php : '*******---'
            },
            {
              css : '********--'
            },
            {
              linux : '*******---'
            },
            {
              photoshop : '*****-----'
            }
          ],
          devStack : [
            'phpstorm', 'sublime-text-3', 'vagrant', 'bower', 'gulp', 'bootstrap', 'angular.js', 'sass', 'laravel-5'
          ],
          interests : [
            'undefined'
          ]
      };

      $('#element').jsonView(JSON.stringify(json),
      {
        collapsed : true
      });
  });
</script>
</body>
</html>
