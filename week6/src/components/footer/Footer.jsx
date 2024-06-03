import React from "react";
import styles from "./footer.module.css";
import Image from "next/image";
import Link from "next/link";

const Footer = () => {
	return (
		<div className={styles.container}> 
			<div className={styles.info}>
				<div className={styles.logo}>
					<a href="https://mitwpu.edu.in/" alt="mitwpu" title="MIT WPU"><Image src="/MitLogo.jpg" alt="" width={50} height={50}/></a>
					<h1 className={styles.logoText}>MITblog</h1>
				</div>
				<p className={styles.desc}>Description</p>
				<div className={styles.icons}>
					<a href="https://www.facebook.com/" title="facebook"><Image src="/facebook.png" alt="facebook" width={18} height={18}/></a>
				<a href="https://www.instagram.com/" title="instagram"><Image src="/instagram.png" alt="instagram" width={18} height={18}/></a>
				</div>
			</div>
			<div className={styles.links}>
				<div className={styles.list}>
					<span className={styles.listTitle}>Links</span>
					<Link href="/">Homepage</Link>
					<Link href="/">Blog</Link>
					<Link href="/">About</Link>
					<Link href="/">Contacts</Link>
				</div>
			</div>

			<div className={styles.links}>
				<div className={styles.list}>
					<span className={styles.listTitle}>Tags</span>
					<Link href="/blog?cat=style">Style</Link>
					<Link href="/blog?cat=fashion">Fashion</Link>
					<Link href="/blog?cat=coding/">Coding</Link>
					<Link href="/blog?cat=travel">Travel</Link>
				</div>
			</div>

			<div className={styles.links}>
				<div className={styles.list}>
					<span className={styles.listTitle}>Social</span>
					<Link href="https://www.facebook.com/">Facebook</Link>
					<Link href="https://www.instagram.com/">Instagram</Link>
				</div>
			</div>
		</div>
	);
}

export default Footer;
