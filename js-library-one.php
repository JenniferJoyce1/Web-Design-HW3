<h1>JavaScrip Library</h1>

yarn add @glimmerx/core @glimmerx/component
<script src="https://glimmerjs.github.io/glimmer-experimental/"></script>

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
