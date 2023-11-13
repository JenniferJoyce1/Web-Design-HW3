<h1>JavaScrip Library</h1>

yarn add @glimmerx/core @glimmerx/component
<script src="https://glimmerjs.github.io/glimmer-experimental/"></script>





import Component, { hbs } from '@glimmerx/component';
export default class extends Component {
  static template = hbs`
      <button>Click me</button>
    `;
}

<script>
import Component, { hbs, tracked } from '@glimmerx/component';
import { on, action } from '@glimmerx/modifier';

export default class HelloWorld extends Component {
  @tracked count = 1;

  @action increment() {
    this.count++;
  }

  static template = hbs`
    <h1>Welcome to the GlimmerX Playground!</h1>

    <p>You have clicked the button {{this.count}} times.</p>

    <button {{on "click" this.increment}}>Click</button>
  `;
}

</script>


<script>
var granimInstance = new Granim({
    element: '#canvas-basic',
    direction: 'left-right',
    isPausedWhenNotInView: true,
    states : {
        "default-state": {
            gradients: [
                ['#ff9966', '#ff5e62'],
                ['#00F260', '#0575E6'],
                ['#e1eec3', '#f05053']
            ]
        }
    }
});
  </script>
