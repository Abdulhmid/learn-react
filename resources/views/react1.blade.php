<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>React Js</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
        <div id="content"></div>

        <div id="content-dua"></div>

        <script type="text/jsx">

            var ReactAh1 = React.createClass({
                render : function(){
                    return(
                        <h2>I love {this.props.man} and {this.props.girl} </h2>
                    );
                }
            });

            React.render(
                <div>
                    <ReactAh1 man="Mr.I" girl="Mrs. x" />
                    <ReactAh1 man="Mr.O" girl="Mrs. y" />
                    <ReactAh1 man="Mr.D" girl="Mrs. z" />
                    <ReactAh1 man="Mr.E" girl="Mrs. a" />
                </div>, 
                document.getElementById('content')
            );


            var ReactAh = React.createClass({
                doSomething: function(){
                    alert("This Text Display : "+this.props.children);
                },
                render : function(){
                    return(
                        <div>
                            <h3>{this.props.man}</h3>
                            <a onClick={this.doSomething} href="#">Click Me</a>
                        </div>
                    );
                }
            });

            React.render(
                <div>
                    <ReactAh man="Mr.I" >This Man Is Awesome</ReactAh>
                    <ReactAh man="Mrs.I" >This Girls Is Awesome</ReactAh>
                </div>, 
                document.getElementById('content-dua')
            );


        </script>
    </body>
</html>
