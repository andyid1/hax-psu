import { html, fixture, expect } from '@open-wc/testing';
import "../hax-psu.js";

describe("HaxPsu test", () => {
  let element;
  beforeEach(async () => {
    element = await fixture(html`
      <hax-psu
        title="title"
      ></hax-psu>
    `);
  });

  it("basic will it blend", async () => {
    expect(element).to.exist;
  });

  it("passes the a11y audit", async () => {
    await expect(element).shadowDom.to.be.accessible();
  });
});
