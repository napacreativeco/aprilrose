<style>
    /* Component: Newsletter */
    .comp__newsletter {
        display: grid;
        grid-template-columns: 1fr 1fr;
        align-items: center;
        background: var(--black);
        color: var(--white);
        padding: 40px 20px;
    }

    .comp__newsletter .headline {
        font-size: 1.2rem;
        margin: 0 0 10px 0;
    }

    .comp__newsletter p {
        margin: 0px;
    }

    .comp__newsletter div {
        padding: 0 40px;
    }
</style>

<section class="comp__newsletter">
    <div>
        <h4 class="headline">Sign up for exclusive email offers</h4>
        <p>Join our occassional Newsletter for exclusive deals and coupons</p>
    </div>
    <div>
        <input type="email" />
    </div>
</section>