import React from 'react'
import styles from "./navbar.module.css"
import Image from 'next/image'
import Link from 'next/Link'
import AuthLinks from '../authLinks/AuthLinks'


const Navbar = () => {
	return (
		<div className={styles.container}> 
			<div className={styles.social}>
				<a href="https://www.facebook.com/" title="facebook"><Image src="/facebook.png" alt="facebook" width={24} height={24}/></a>
				<a href="https://www.instagram.com/" title="instagram"><Image src="/instagram.png" alt="instagram" width={24} height={24}/></a>
				<a href="https://mitwpu.edu.in/" alt="mitwpu" title="MIT WPU"><Image src="/MitLogo.jpg" alt="" width={24} height={24}/></a>
				
			</div>
			<div className={styles.logo}>

				MITblog
			</div>
			<div className={styles.links}>
				<Link href='/' className={styles.link}>Homepage</Link>
				<Link href='/' className={styles.link}>Contact</Link>
				<Link href='/' className={styles.link}>About</Link>
				<AuthLinks/>
			</div>
		</div>
	);
};

export default Navbar;