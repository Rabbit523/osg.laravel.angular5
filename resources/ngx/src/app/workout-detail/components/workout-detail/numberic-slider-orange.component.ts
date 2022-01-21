import { Component, OnInit, Input, Output, EventEmitter } from '@angular/core';
import { Options } from 'ng5-slider';

@Component({
  selector: 'osg-numberic-slider-orange',
  templateUrl: './numberic-slider-orange.component.html'
})
export class NumbericSliderOrangeComponent implements OnInit{

  @Input() value: number;
  @Output() change: EventEmitter<number> = new EventEmitter();

  options: Options = {
    showTicksValues: true,
    floor: 0,
    ceil: 10,
    stepsArray: [
      {value: 0, legend: 'Poor'},
      {value: 1},
      {value: 2},
      {value: 3},
      {value: 4},
      {value: 5, legend: 'Good'},
      {value: 6},
      {value: 7},
      {value: 8},
      {value: 9},
      {value: 10, legend: 'Excellent'},
    ]
  };

  ngOnInit(): void {

  }

  increaseValue() {
    let value = this.value;
    if (value < 10) {
      this.change.emit(++value);
    }
  }

  decreaseValue() {
    let value = this.value;
    if (value < 10) {
      this.change.emit(--value);
    }
  }

  changeValue(value) {
    this.change.emit(value);
  }
}
