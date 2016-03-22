<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>React Js</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="http://fb.me/react-0.12.2.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/react.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/react/0.13.3/JSXTransformer.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    </head>
    <body>
        
        <div id="content"></div>

        <div id="content-dua"></div>

        <div id="content-tiga"></div>

        <div id="content-empat"></div>
        
        <div id="content-lima"></div>

        <div id="content-combine"></div>


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

            var ComponentDua = React.createClass({
                actionSomething : function(){
                    alert("Hello Brooo"+this.props.children);
                },
                render : function(){
                    return (
                        <div>
                            <h3>You Broo {this.props.name} </h3>
                            <button onClick={this.actionSomething}>Clik broo</button>
                        </div>
                    );
                }
            });

            React.render(
                    <ComponentDua name="Budi">Brooooo BOyy</ComponentDua>,
                document.getElementById('content-empat')
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

            React.render(<h1>Hello Broo</h1>,document.getElementById('content-tiga'));


            var ToggleText = React.createClass({
              getInitialState: function () {
                return {
                  showDefault: true
                }
              },
              
              toggle: function (e) {
                e.preventDefault();
                
                this.setState({ showDefault: !this.state.showDefault })
              },
              
              render: function () {
                var message = this.props.default;
                
                if (!this.state.showDefault) {
                  message = this.props.alt;
                }
                
                return (
                  <div>
                    <h1>Hello {message}!</h1>
                    <a href="" onClick={this.toggle}>Toggle</a>
                  </div>
                );
              }
            });

            React.render(<ToggleText default="World" alt="Mars" />, document.getElementById('content-lima'));



var ProductItem = React.createClass({
  render: function () {
    return (
      <tr>
        <td>{this.props.name}</td>
        <td>{this.props.price}</td>
      </tr>
    );
  }
});

var ProductsList = React.createClass({
  render: function () {
    var products = _.map(this.props.products, function (product, index) {
      return (
        <div>
            <ProductItem
              key={index}
              name={product.name}
              price={product.price} />
        </div>
      );
    });
    
    return (
      <table>
        {products}
      </table>
    );
  }
});

// Could come from an API, LocalStorage, another component, etc...
var products = [
  { name: 'Toast', price: 1499 },
  { name: 'Bacon', price: 3245 },
  { name: 'Coffee', price : 300 }
];

React.render(<ProductsList products={products} />, document.getElementById('content-combine'));



        </script>
    </body>
</html>
