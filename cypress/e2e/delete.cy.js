describe("delete", () => {
    it("user can delete produk", () => {
        cy.visit("/login");
        cy.get("[data-id=input-email]").type("diza@admin.com");
        cy.get("[data-id=input-password]").type("admindiza");
        cy.get("[data-id=btn-signin]").click();

        cy.visit("/produk");
        cy.get("[data-id=delete1").click();

        cy.on("window:confirm", () => true);

        cy.get(".swal2-popup").should("be.visible");
    });
});
